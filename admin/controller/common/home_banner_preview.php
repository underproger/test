<?php
class ControllerCommonHomeBannerPreview extends Controller {
	public function index() {
		$this->load->language('design/banner');
		
        $this->load->model('design/banner');
		
        $this->load->model('localisation/language');

		$this->load->model('catalog/product');
		
		$this->load->model('catalog/category');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('tool/image');

        $banner_images = $this->model_design_banner->getBannerImages(7);
        $data['banner_images'] = array();

		foreach ($banner_images as $key => $value) {
			foreach ($value as $banner_image) {
				if (is_file(DIR_IMAGE . $banner_image['image'])) {
					$image = $banner_image['image'];
					$thumb = $banner_image['image'];
				} else {
					$image = '';
					$thumb = 'no_image.png';
				}
				
				$data['banner_images'][$key][] = array(
					'label'      => $banner_image['label'],
					'title'      => $banner_image['title'],
					'text'       => $banner_image['text'],
					'link'       => $banner_image['link'],
					'image'      => '/image/'.$image,
					'thumb'      => $this->model_tool_image->resize($thumb, 100, 100),
					'date_start' => $banner_image['date_start'],
					'date_end' => $banner_image['date_end'],
					'sort_order' => $banner_image['sort_order']
				);
			}
		}

		$banner_images = $this->model_design_banner->getBannerImages(11);
        $data['new_images'] = array();

		foreach ($banner_images as $key => $value) {
			foreach ($value as $banner_image) {
				
				
				$products = array();

                foreach ($banner_image['products'] as $product_id) {
					$product_info = $this->model_catalog_product->getProduct($product_id);

					if ($product_info) {
						if ( $product_info['quantity'] != 0 ) {
							if ($product_info['image']) {
								$image = '/image/'.$product_info['image'];
								// $image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
							} else {
								$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
							}

							$images = $this->model_catalog_product->getProductImages($product_info['product_id']);
							if ( $images ) {
								$second_image = '/image/'.$images[0]['image'];
							} else {
								$second_image = null;
							}
				

							if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
								$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
							} else {
								$price = false;
							}

							if (!empty($product_info['special']) && (float)$product_info['special'] >= 0) {
								$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
								$tax_price = (float)$product_info['special'];
							} else {
								$special = false;
								$tax_price = (float)$product_info['price'];
							}
				
							if ($this->config->get('config_tax')) {
								$tax = $this->currency->format($tax_price, $this->session->data['currency']);
							} else {
								$tax = false;
							}

							if ($this->config->get('config_review_status')) {
								$rating = $product_info['rating'];
							} else {
								$rating = false;
							}

							$categories_list = $this->model_catalog_product->getCategories($product_info['product_id']);
							$categories = array();
							
							if($categories_list){
								
								foreach ( $categories_list as $item ) {
									$category = $this->model_catalog_category->getCategory($item['category_id']);
									$categories[] = $category;
								}					
							}	

							$attribute_groups = $this->model_catalog_product->getProductAttributesCustom($product_info['product_id']);

							$label_text = '';


							$products[] = array(
								'product_id'  => $product_info['product_id'],
								'thumb'       => $image,
								'second_image'       => $second_image,
								'name'        => $product_info['name'],
								'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
								'price'       => $price,
								'label_text'	=> $label_text,
								'tax'         => $tax,
								'rating'      => $rating,
								'categories'      => $categories,
								'main_category_href' => $this->url->link('product/category', 'path=' . $categories[0]['category_id']),
								'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
								'is_favorite' => ( isset($this->session->data['wishlist']) && in_array($product_info['product_id'], $this->session->data['wishlist']) ) ? true : false,

							);

						}
					}
                }

				if (is_file(DIR_IMAGE . $banner_image['image'])) {
					$image = $banner_image['image'];
					$thumb = $banner_image['image'];
				} else {
					$image = '';
					$thumb = 'no_image.png';
				}

				$data['new_images'][$key][] = array(
					'label'      => $banner_image['label'],
					'title'      => $banner_image['title'],
					'text'       => $banner_image['text'],
					'link'       => $banner_image['link'],
					'image'      => '/image/'.$image,
					'thumb'      => $this->model_tool_image->resize($thumb, 100, 100),
					'date_start' => $banner_image['date_start'],
					'date_end' => $banner_image['date_end'],
					'sort_order' => $banner_image['sort_order'],
					'products'   => $products,
				);
			}
		}
		
        $newest_images = $this->model_design_banner->getBannerImages(9);
        $data['newest_images'] = array();

		foreach ($newest_images as $key => $value) {
			foreach ($value as $newest_image) {
				if (is_file(DIR_IMAGE . $newest_image['image'])) {
					$image = $newest_image['image'];
					$thumb = $newest_image['image'];
				} else {
					$image = '';
					$thumb = 'no_image.png';
				}

				$data['newest_images'][$key][] = array(
					'label'      => $newest_image['label'],
					'title'      => $newest_image['title'],
					'text'       => $newest_image['text'],
					'link'       => $newest_image['link'],
					'image'      => '/image/'.$image,
					'thumb'      => $this->model_tool_image->resize($thumb, 100, 100),
					'date_start' => $newest_image['date_start'],
					'date_end' => $newest_image['date_end'],
					'sort_order' => $newest_image['sort_order']
				);
			}
		}

		$this->response->setOutput($this->load->view('common/home_banner_preview', $data));
	}
}