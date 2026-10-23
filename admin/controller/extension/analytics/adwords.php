<?php
class ControllerExtensionAnalyticsAdwords extends Controller {
	private $error = array();

	public function index() {
		$data['extension_version'] = '1.3';
		$this->load->language('extension/analytics/adwords');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('analytics_adwords', $this->request->post, $this->request->get['store_id']);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true));
		}
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_signup'] = $this->language->get('text_signup');
		$data['text_sale'] = $this->language->get('text_sale');
		
		$data['entry_global'] = $this->language->get('entry_global');
		$data['entry_sale'] = $this->language->get('entry_sale');
		$data['entry_signup'] = $this->language->get('entry_signup');
		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

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
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/analytics/adwords', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true)
		);

		$data['action'] = $this->url->link('extension/analytics/adwords', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true);
		
		$data['user_token'] = $this->session->data['user_token'];
				
		if (isset($this->request->post['analytics_adwords_global'])) {
			$data['analytics_adwords_global'] = $this->request->post['analytics_adwords_global'];
		} else {
			$data['analytics_adwords_global'] = $this->model_setting_setting->getSettingValue('analytics_adwords_global', $this->request->get['store_id']);
		}
		
		if (isset($this->request->post['analytics_adwords_sale'])) {
			$data['analytics_adwords_sale'] = $this->request->post['analytics_adwords_sale'];
		} else {
			$data['analytics_adwords_sale'] = $this->model_setting_setting->getSettingValue('analytics_adwords_sale', $this->request->get['store_id']);
		}
		
		if (isset($this->request->post['analytics_adwords_signup'])) {
			$data['analytics_adwords_signup'] = $this->request->post['analytics_adwords_signup'];
		} else {
			$data['analytics_adwords_signup'] = $this->model_setting_setting->getSettingValue('analytics_adwords_signup', $this->request->get['store_id']);
		}
		
		if (isset($this->request->post['analytics_adwords_status'])) {
			$data['analytics_adwords_status'] = $this->request->post['analytics_adwords_status'];
		} else {
			$data['analytics_adwords_status'] = $this->model_setting_setting->getSettingValue('analytics_adwords_status', $this->request->get['store_id']);
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/analytics/adwords', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/analytics/adwords')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}		

		return !$this->error;
	}
}
