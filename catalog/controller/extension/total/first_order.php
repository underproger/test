<?php
class ControllerExtensionTotalFirstOrder extends Controller {
	/**
	 * Подія catalog/view/common/footer/after (реєструється при встановленні / збереженні розширення).
	 * Додає банер «Даруємо знижку» перед </body>.
	 */
	public function banner(&$route = '', &$args = array(), &$output = '') {
		if (!is_string($output) || $output === '') {
			return;
		}

		if (!$this->config->get('total_first_order_status') || !$this->config->get('total_first_order_banner')) {
			return;
		}

		// Банер вже показували цьому відвідувачу
		if (!empty($this->request->cookie['first_order_banner'])) {
			return;
		}

		// Не заважаємо в кошику та на оформленні — там знижка вже видна в підсумках
		$current_route = isset($this->request->get['route']) ? (string)$this->request->get['route'] : '';

		if (strpos($current_route, 'checkout/') === 0) {
			return;
		}

		$this->load->model('extension/total/first_order');

		// Банер закликає зареєструватися — авторизованим не показуємо (знижку вони побачать у кошику).
		// Гостям, чий телефон уже є в замовленнях, теж не показуємо.
		if ($this->customer->isLogged() || $this->model_extension_total_first_order->hasPreviousOrders()) {
			return;
		}

		$this->load->language('extension/total/first_order');

		$data['text_banner_title'] = sprintf($this->language->get('text_banner_title'), $this->model_extension_total_first_order->getPercent());
		$data['text_banner_subtitle'] = $this->language->get('text_banner_subtitle');
		$data['text_banner_text'] = $this->language->get('text_banner_text');
		$data['text_banner_button'] = $this->language->get('text_banner_button');
		$data['text_banner_close'] = $this->language->get('text_banner_close');

		$html = $this->load->view('extension/total/first_order_banner', $data);

		$position = strripos($output, '</body>');

		if ($position !== false) {
			$output = substr_replace($output, $html, $position, 0);
		} else {
			$output .= $html;
		}
	}
}
