<?php
class ControllerExtensionModuleImpulseShopsList extends Controller {
	public function index() {
		$this->load->language('extension/module/impulse_shops_list');

        $data['locations'] = array();

		$this->load->model('localisation/location');

		foreach((array)$this->config->get('config_location') as $location_id) {
			$location_info = $this->model_localisation_location->getLocation($location_id);

			if ($location_info) {
				if ($location_info['image']) {
					$image = $this->model_tool_image->resize($location_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_height'));
				} else {
					$image = false;
				}

				if ($location_info['images']) {
					$images = json_decode($location_info['images']);
				} else {
					$images = false;
				}

				$data['locations'][] = array(
					'location_id' => $location_info['location_id'],
					'name'        => $location_info['name'],
					'address'     => nl2br($location_info['address']),
					'geocode'     => $location_info['geocode'],
					'telephone'   => $location_info['telephone'],
					'telephone2'   => $location_info['telephone2'],
					'email'   => $location_info['email'],
					'fax'         => $location_info['fax'],
					'image'       => $image,
					'images'       => $images,
					'open'        => nl2br($location_info['open']),
					'comment'     => $location_info['comment']
				);
			}
		}
        
		$data['locations'] = array_reverse($data['locations']);

		return $this->load->view('extension/module/impulse_shops_list', $data);
	}
}