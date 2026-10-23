<?php
class ControllerExtensionModuleImpulseHomeNew extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['subtitle'], ENT_QUOTES, 'UTF-8');
			$data['image'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['image'], ENT_QUOTES, 'UTF-8');
			$data['text'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
			$data['link'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['link'], ENT_QUOTES, 'UTF-8');

			return $this->load->view('extension/module/impulse_home_new', $data);
		}
	}
}