<?php
class ControllerExtensionTotalDiscounts extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/total/discounts');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		$this->load->model('customer/customer_group');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('total_discounts', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_discount_same'] = $this->language->get('text_discount_same');
		$data['text_discount_summ'] = $this->language->get('text_discount_summ');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_lowprice'] = $this->language->get('text_lowprice');
		$data['text_highprice'] = $this->language->get('text_highprice');
		$data['text_allprice'] = $this->language->get('text_allprice');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_same_qty'] = $this->language->get('entry_same_qty');
		$data['entry_same_val'] = $this->language->get('entry_same_val');
		$data['entry_summ'] = $this->language->get('entry_summ');
		$data['entry_summ_val'] = $this->language->get('entry_summ_val');
		$data['entry_customer_groups'] = $this->language->get('entry_customer_groups');
		$data['entry_in_same'] = $this->language->get('entry_in_same');
		$data['entry_target'] = $this->language->get('entry_target');
		$data['entry_priority'] = $this->language->get('entry_priority');
		$data['entry_special'] = $this->language->get('entry_special');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		
		$data['help_customer_groups'] = $this->language->get('help_customer_groups');
		$data['help_in_same'] = $this->language->get('help_in_same');
		$data['help_priority'] = $this->language->get('help_priority');
		$data['help_special'] = $this->language->get('help_special');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
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
			'href' => $this->url->link('extension/total/discounts', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/total/discounts', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);

		if (isset($this->request->post['total_discounts_status'])) {
			$data['total_discounts_status'] = $this->request->post['total_discounts_status'];
		} else {
			$data['total_discounts_status'] = $this->config->get('total_discounts_status');
		}

		if (isset($this->request->post['total_discounts_sort_order'])) {
			$data['total_discounts_sort_order'] = $this->request->post['total_discounts_sort_order'];
		} else {
			$data['total_discounts_sort_order'] = $this->config->get('total_discounts_sort_order');
		}

		if (isset($this->request->post['total_discounts_same_category'])) {
			$data['total_discounts_same_category'] = $this->request->post['total_discounts_same_category'];
		} else {
			$data['total_discounts_same_category'] = $this->config->get('total_discounts_same_category');
		}

		if (isset($this->request->post['total_discounts_in_same'])) {
			$data['total_discounts_in_same'] = $this->request->post['total_discounts_in_same'];
		} else {
			$data['total_discounts_in_same'] = $this->config->get('total_discounts_in_same');
		}

		if (isset($this->request->post['total_discounts_same_category_val'])) {
			$data['total_discounts_same_category_val'] = $this->request->post['total_discounts_same_category_val'];
		} else {
			$data['total_discounts_same_category_val'] = $this->config->get('total_discounts_same_category_val');
		}

		if (isset($this->request->post['total_discounts_summ'])) {
			$data['total_discounts_summ'] = $this->request->post['total_discounts_summ'];
		} else {
			$data['total_discounts_summ'] = $this->config->get('total_discounts_summ');
		}

		if (isset($this->request->post['discount_summ_val'])) {
			$data['total_discounts_summ_val'] = $this->request->post['total_discounts_summ_val'];
		} else {
			$data['total_discounts_summ_val'] = $this->config->get('total_discounts_summ_val');
		}

		if (isset($this->request->post['total_discounts_target'])) {
			$data['total_discounts_target'] = $this->request->post['total_discounts_target'];
		} else {
			$data['total_discounts_target'] = $this->config->get('total_discounts_target');
		}

		if (isset($this->request->post['total_discounts_priority'])) {
			$data['total_discounts_priority'] = $this->request->post['total_discounts_priority'];
		} else {
			$data['total_discounts_priority'] = $this->config->get('total_discounts_priority');
		}

		if (isset($this->request->post['total_discounts_special'])) {
			$data['total_discounts_special'] = $this->request->post['total_discounts_special'];
		} else {
			$data['total_discounts_special'] = $this->config->get('total_discounts_special');
		}		

		if (isset($this->request->post['total_discounts_customer_groups_qty'])) {
			$data['total_discounts_customer_groups_qty'] = $this->request->post['total_discounts_customer_groups_qty'];
		} else if ($this->config->get('total_discounts_customer_groups_qty')) {
			$data['total_discounts_customer_groups_qty'] = $this->config->get('total_discounts_customer_groups_qty');
		} else {
			$data['total_discounts_customer_groups_qty'] = array();
		}

		if (isset($this->request->post['total_discounts_customer_groups_summ'])) {
			$data['total_discounts_customer_groups_summ'] = $this->request->post['total_discounts_customer_groups_summ'];
		} else if ($this->config->get('total_discounts_customer_groups_summ')) {
			$data['total_discounts_customer_groups_summ'] = $this->config->get('total_discounts_customer_groups_summ');
		} else {
			$data['total_discounts_customer_groups_summ'] = array();
		}

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$data['copy'] = '&copy;2020, Evgeny Tselischev <<a href="mailto:teronische@yandex.ru">teronische@yandex.ru</a>>';

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/total/discounts', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/total/discounts')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}