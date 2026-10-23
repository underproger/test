<?php
class ControllerExtensionTotalFirstOrder extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/total/first_order');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->post['total_first_order_exclude_status'])) {
				$this->request->post['total_first_order_exclude_status'] = array();
			}

			$this->model_setting_setting->editSetting('total_first_order', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['percent'])) {
			$data['error_percent'] = $this->error['percent'];
		} else {
			$data['error_percent'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/total/first_order', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/total/first_order', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);

		if (isset($this->request->post['total_first_order_percent'])) {
			$data['total_first_order_percent'] = $this->request->post['total_first_order_percent'];
		} else {
			$data['total_first_order_percent'] = $this->config->get('total_first_order_percent');
		}

		if (isset($this->request->post['total_first_order_exclude_status'])) {
			$data['total_first_order_exclude_status'] = $this->request->post['total_first_order_exclude_status'];
		} elseif (is_array($this->config->get('total_first_order_exclude_status'))) {
			$data['total_first_order_exclude_status'] = $this->config->get('total_first_order_exclude_status');
		} else {
			$data['total_first_order_exclude_status'] = array();
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['total_first_order_status'])) {
			$data['total_first_order_status'] = $this->request->post['total_first_order_status'];
		} else {
			$data['total_first_order_status'] = $this->config->get('total_first_order_status');
		}

		if (isset($this->request->post['total_first_order_sort_order'])) {
			$data['total_first_order_sort_order'] = $this->request->post['total_first_order_sort_order'];
		} else {
			$data['total_first_order_sort_order'] = $this->config->get('total_first_order_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/total/first_order', $data));
	}

	public function install() {
		$this->load->model('setting/setting');
		$this->load->model('localisation/order_status');

		// Скасовані / анульовані / помилкові / неактуальні — за замовчуванням не вважаються покупкою
		$cancel_ids = array(7, 9, 10, 14, 16, 19);
		$exclude = array();

		foreach ($this->model_localisation_order_status->getOrderStatuses() as $order_status) {
			if (in_array((int)$order_status['order_status_id'], $cancel_ids)) {
				$exclude[] = (int)$order_status['order_status_id'];
			}
		}

		$this->model_setting_setting->editSetting('total_first_order', array(
			'total_first_order_percent'        => 5,
			'total_first_order_exclude_status' => $exclude,
			'total_first_order_status'         => 0,
			'total_first_order_sort_order'     => 4
		));
	}

	public function uninstall() {
		$this->load->model('setting/setting');

		$this->model_setting_setting->deleteSetting('total_first_order');
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/total/first_order')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$percent = isset($this->request->post['total_first_order_percent']) ? str_replace(',', '.', $this->request->post['total_first_order_percent']) : '';

		if (!is_numeric($percent) || $percent <= 0 || $percent > 100) {
			$this->error['percent'] = $this->language->get('error_percent');
		} else {
			$this->request->post['total_first_order_percent'] = (float)$percent;
		}

		return !$this->error;
	}
}
