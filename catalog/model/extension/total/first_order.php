<?php
/**
 * Знижка на перше замовлення.
 * Знижка total_first_order_percent % на всю корзину (sub_total) з'являється, коли введено телефон
 * і з ним немає попередніх замовлень (order_status_id > 0, статус не з виключених).
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
	 * Знижка діє: телефон введено повністю і з ним ще не було замовлень.
	 */
	public function isEligible() {
		$phone = $this->normalizePhone($this->getTelephone());

		return $phone && $this->isFirstOrder($phone);
	}

	/**
	 * Відомий телефон уже є в замовленнях (для банера: таким клієнтам не показуємо).
	 * Телефон ще не відомий — false.
	 */
	public function hasPreviousOrders() {
		$phone = $this->normalizePhone($this->getTelephone());

		return $phone && !$this->isFirstOrder($phone);
	}

	/**
	 * Відсоток для виводу: 5, 5.5
	 */
	public function getPercent() {
		return rtrim(rtrim(number_format((float)$this->config->get('total_first_order_percent'), 2, '.', ''), '0'), '.');
	}

	/**
	 * Телефон з поточного оформлення.
	 */
	private function getTelephone() {
		// Simple: актуальне значення поля з форми
		if (!empty($this->session->data['simple']['customer']['telephone'])) {
			return $this->session->data['simple']['customer']['telephone'];
		}

		// Стандартний чекаут (гість)
		if (!empty($this->session->data['guest']['telephone'])) {
			return $this->session->data['guest']['telephone'];
		}

		// API: створення / редагування замовлення з адмінки
		if (!empty($this->session->data['customer']['telephone'])) {
			return $this->session->data['customer']['telephone'];
		}

		if ($this->customer->isLogged()) {
			return $this->customer->getTelephone();
		}

		return '';
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

	private function isFirstOrder($phone) {
		if (isset($this->cache[$phone])) {
			return $this->cache[$phone];
		}

		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order`
			WHERE order_status_id > '0'
			AND RIGHT(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(telephone, ' ', ''), '-', ''), '(', ''), ')', ''), '+', ''), '.', ''), 9) = '" . $this->db->escape($phone) . "'";

		$exclude_statuses = $this->config->get('total_first_order_exclude_status');

		if (!empty($exclude_statuses) && is_array($exclude_statuses)) {
			$sql .= " AND order_status_id NOT IN (" . implode(',', array_map('intval', $exclude_statuses)) . ")";
		}

		// Редагування замовлення з адмінки: саме замовлення не рахуємо
		if (isset($this->request->get['route']) && $this->request->get['route'] == 'api/order/edit' && !empty($this->request->get['order_id'])) {
			$sql .= " AND order_id != '" . (int)$this->request->get['order_id'] . "'";
		}

		$query = $this->db->query($sql);

		$this->cache[$phone] = ((int)$query->row['total'] === 0);

		return $this->cache[$phone];
	}
}
