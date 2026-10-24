<?php
/**
 * Знижка на перше замовлення — лише для зареєстрованих клієнтів.
 * Знижка total_first_order_percent % на всю корзину (sub_total), якщо клієнт авторизований
 * (або створює акаунт на оформленні в Simple) і в нього ще не було замовлень — ні за акаунтом,
 * ні за телефоном (order_status_id > 0, статус не з виключених).
 */
class ModelExtensionTotalFirstOrder extends Model {
	private $cache = array();

	public function getTotal($total) {
		$percent = (float)$this->config->get('total_first_order_percent');

		if ($percent <= 0 || !$this->isEligible()) {
			return;
		}

		$sub_total = $this->cart->getSubTotal();

		if ($sub_total <= 0) {
			return;
		}

		$discount_total = 0;

		foreach ($this->cart->getProducts() as $product) {
			$discount = $product['total'] / 100 * $percent;

			if ($product['tax_class_id']) {
				$tax_rates = $this->tax->getRates($discount, $product['tax_class_id']);

				foreach ($tax_rates as $tax_rate) {
					if ($tax_rate['type'] == 'P' && isset($total['taxes'][$tax_rate['tax_rate_id']])) {
						$total['taxes'][$tax_rate['tax_rate_id']] -= $tax_rate['amount'];
					}
				}
			}

			$discount_total += $discount;
		}

		// Суми в базовій валюті магазину — округлюємо до її знаків (UAH — без копійок), щоб підсумки сходились
		$discount_total = round($discount_total, (int)$this->currency->getDecimalPlace($this->config->get('config_currency')));

		if ($discount_total > $total['total']) {
			$discount_total = $total['total'];
		}

		if ($discount_total <= 0) {
			return;
		}

		$this->load->language('extension/total/first_order', 'first_order');

		$total['totals'][] = array(
			'code'       => 'first_order',
			'title'      => sprintf($this->language->get('first_order')->get('text_first_order'), $this->getPercent()),
			'value'      => -$discount_total,
			'sort_order' => $this->config->get('total_first_order_sort_order')
		);

		$total['total'] -= $discount_total;
	}

	/**
	 * Чи діє знижка зараз.
	 */
	public function isEligible() {
		if ($this->customer->isLogged()) {
			// Авторизований клієнт: перевіряємо акаунт і обидва телефони (з акаунта та з форми)
			return !$this->hasOrders((int)$this->customer->getId(), array($this->customer->getTelephone(), $this->getFormTelephone()));
		}

		if ($this->isApiRequest()) {
			// Замовлення з адмінки: тільки для клієнта з акаунтом
			$customer_id = !empty($this->session->data['customer']['customer_id']) ? (int)$this->session->data['customer']['customer_id'] : 0;
			$telephone = !empty($this->session->data['customer']['telephone']) ? $this->session->data['customer']['telephone'] : '';

			return $customer_id && !$this->hasOrders($customer_id, array($telephone));
		}

		if ($this->isRegistering()) {
			// Гість обрав «Створити акаунт» на оформленні (Simple створить акаунт перед записом замовлення):
			// показуємо знижку, коли номер введено повністю і з ним не було замовлень
			$phone = $this->getFormTelephone();

			return $this->normalizePhone($phone) && !$this->hasOrders(0, array($phone));
		}

		return false;
	}

	/**
	 * Для банера: чи відомо, що в клієнта вже були замовлення (за акаунтом або відомим телефоном).
	 */
	public function hasPreviousOrders() {
		if ($this->customer->isLogged()) {
			return $this->hasOrders((int)$this->customer->getId(), array($this->customer->getTelephone(), $this->getFormTelephone()));
		}

		return $this->hasOrders(0, array($this->getFormTelephone()));
	}

	/**
	 * Відсоток для виводу: 5, 5.5
	 */
	public function getPercent() {
		return rtrim(rtrim(number_format((float)$this->config->get('total_first_order_percent'), 2, '.', ''), '0'), '.');
	}

	/**
	 * Телефон, введений у формі оформлення (Simple або стандартний чекаут).
	 */
	private function getFormTelephone() {
		if (!empty($this->session->data['simple']['customer']['telephone'])) {
			return $this->session->data['simple']['customer']['telephone'];
		}

		if (!empty($this->session->data['guest']['telephone'])) {
			return $this->session->data['guest']['telephone'];
		}

		return '';
	}

	/**
	 * Гість обрав «Створити акаунт?» — «Так» у формі Simple.
	 */
	private function isRegistering() {
		return !empty($this->session->data['simple']['customer']['register']);
	}

	private function isApiRequest() {
		return isset($this->request->get['route']) && strpos($this->request->get['route'], 'api/') === 0;
	}

	/**
	 * Порівнюємо за останніми 9 цифрами: +380 (67) 123-45-67, 380671234567, 0671234567 — один номер.
	 * Неповний номер (менше 10 цифр, напр. поки вводиться по масці) — не перевіряємо.
	 */
	private function normalizePhone($phone) {
		$digits = preg_replace('/\D+/', '', (string)$phone);

		if (strlen($digits) < 10) {
			return '';
		}

		return substr($digits, -9);
	}

	/**
	 * Чи є підтверджені замовлення за акаунтом або за будь-яким із телефонів.
	 */
	private function hasOrders($customer_id, array $phones) {
		$conditions = array();

		if ($customer_id) {
			$conditions[] = "customer_id = '" . (int)$customer_id . "'";
		}

		$phones = array_unique(array_filter(array_map(array($this, 'normalizePhone'), $phones)));

		foreach ($phones as $phone) {
			$conditions[] = "RIGHT(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(telephone, ' ', ''), '-', ''), '(', ''), ')', ''), '+', ''), '.', ''), 9) = '" . $this->db->escape($phone) . "'";
		}

		if (!$conditions) {
			return false;
		}

		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND (" . implode(' OR ', $conditions) . ")";

		$exclude_statuses = $this->config->get('total_first_order_exclude_status');

		if (!empty($exclude_statuses) && is_array($exclude_statuses)) {
			$sql .= " AND order_status_id NOT IN (" . implode(',', array_map('intval', $exclude_statuses)) . ")";
		}

		// Редагування замовлення з адмінки: саме замовлення не рахуємо
		if (isset($this->request->get['route']) && $this->request->get['route'] == 'api/order/edit' && !empty($this->request->get['order_id'])) {
			$sql .= " AND order_id != '" . (int)$this->request->get['order_id'] . "'";
		}

		$cache_key = md5($sql);

		if (!isset($this->cache[$cache_key])) {
			$query = $this->db->query($sql);

			$this->cache[$cache_key] = ((int)$query->row['total'] > 0);
		}

		return $this->cache[$cache_key];
	}
}
