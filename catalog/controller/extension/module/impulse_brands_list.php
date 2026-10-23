<?php
class ControllerExtensionModuleImpulseBrandsList extends Controller {
	public function index() {
		$this->load->language('extension/module/impulse_brands_list');
	
        $this->load->model('catalog/manufacturer');

        $this->load->model('tool/image');

		$manufacturers = $this->config->get('module_impulse_brands_list_manufacturers');

		$data['manufacturers'] = array();

		if (!empty($manufacturers)) {
			foreach ($manufacturers as $manufacturer_id) {
				$manufacturer = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);

				$manufacturer_thumb = '';

				if ($manufacturer['image']) {
					$manufacturer_thumb = $this->model_tool_image->resize($manufacturer['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_height'));
				} else {
					$manufacturer_thumb = '';
				}

				$data['manufacturers'][] = array(
					'image' => $manufacturer_thumb,
					'name'        => $manufacturer['name'],
					'href'        => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id']),
				);
			}
		}

		$data['brands_link'] = $this->url->link('product/manufacturer', '', true);

		return $this->load->view('extension/module/impulse_brands_list', $data);
	}
}