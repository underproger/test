<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerInformationInformation extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('design/banner');
		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$data['id'] = $information_id;
			
			if ($information_info['meta_title']) {
				$this->document->setTitle($information_info['meta_title']);
			} else {
				$this->document->setTitle($information_info['title']);
			}
			
			if ($information_info['noindex'] <= 0 && $this->config->get('config_noindex_status')) {
				$this->document->setRobots('noindex,follow');
			}
			
			if ($information_info['meta_h1']) {
				$data['heading_title'] = $information_info['meta_h1'];
			} else {
				$data['heading_title'] = $information_info['title'];
			}
			
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);

			$data['breadcrumbs'][] = array(
				'text' => $information_info['title'],
				'href' => $this->url->link('information/information', 'information_id=' .  $information_id)
			);

			$data['image'] = html_entity_decode($information_info['image'], ENT_QUOTES, 'UTF-8');
			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');
			$data['description2'] = html_entity_decode($information_info['description2'], ENT_QUOTES, 'UTF-8');
			$data['sales'] = $this->model_design_banner->getBanner(12);
			// $data['sales'] = json_decode($information_info['sales']);

			

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');


			// brand

			$data['is_brand'] = $information_info['is_brand'];
			$information_brand = $this->model_catalog_information->getInformationBrand($information_id);

			if ( $data['is_brand'] && $information_brand ) {
				$data['block_1_title'] = $information_brand['block_1_title'];
				$data['block_1_image'] = html_entity_decode($information_brand['block_1_image'], ENT_QUOTES, 'UTF-8');
				$data['block_1_text_color'] = $information_brand['block_1_text_color'] ? $information_brand['block_1_text_color'] : '#fff';
				$data['block_1_text'] = html_entity_decode($information_brand['block_1_text'], ENT_QUOTES, 'UTF-8');
				$data['block_2_text_1'] = html_entity_decode($information_brand['block_2_text_1'], ENT_QUOTES, 'UTF-8');
				$data['block_2_text_2'] = html_entity_decode($information_brand['block_2_text_2'], ENT_QUOTES, 'UTF-8');
				$data['block_2_image_1'] = html_entity_decode($information_brand['block_2_image_1'], ENT_QUOTES, 'UTF-8');
				$data['block_2_image_2'] = html_entity_decode($information_brand['block_2_image_2'], ENT_QUOTES, 'UTF-8');
				$data['block_2_text_3'] = html_entity_decode($information_brand['block_2_text_3'], ENT_QUOTES, 'UTF-8');
				$data['brand_quote'] = html_entity_decode($information_brand['quote'], ENT_QUOTES, 'UTF-8');
				$data['brand_quote_author'] = $information_brand['quote_author'];
				$data['block_3_text_1'] = html_entity_decode($information_brand['block_3_text_1'], ENT_QUOTES, 'UTF-8');
				$data['block_3_text_2'] = html_entity_decode($information_brand['block_3_text_2'], ENT_QUOTES, 'UTF-8');
				$data['block_4_text_1'] = html_entity_decode($information_brand['block_4_text_1'], ENT_QUOTES, 'UTF-8');
				$data['block_4_image'] = html_entity_decode($information_brand['block_4_image'], ENT_QUOTES, 'UTF-8');
				$data['block_4_text_2'] = html_entity_decode($information_brand['block_4_text_2'], ENT_QUOTES, 'UTF-8');
				$data['brand_images'] = json_decode($information_brand['images']);

				$manufacturer_id = $this->model_catalog_information->getInformationManufacturerId($data['block_1_title']);
				$data['brand_url'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer_id);
			}
			// end | brand


			foreach ($this->model_catalog_information->getInformations() as $result) {
				if ( !$result['is_brand'] ) {
					$data['informations'][] = array(
						'id' => $result['information_id'],
						'title' => $result['title'],
						'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
					);
				}
			}

			$this->response->setOutput($this->load->view('information/information', $data));
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->addHeader('X-Robots-Tag: noindex');

		$this->response->setOutput($output);
	}
}
