<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerProductProduct extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('product/product');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$this->load->model('catalog/category');

		// Custom Category Breadcrumb
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);

		$categories = $this->model_catalog_product->getCategories($product_info['product_id']);
		if($categories){
			$category_info = $this->model_catalog_category->getCategory($categories[0]['category_id']);

			$data['breadcrumbs'][] = array(
				'text' => $category_info['name'],
				'href' => $this->url->link('product/category', 'path=' . $category_info['category_id'])
			);
		}
		// END | Custom Category Breadcrumb


		// if (isset($this->request->get['path'])) {
		// 	$path = '';

		// 	$parts = explode('_', (string)$this->request->get['path']);

		// 	$category_id = (int)array_pop($parts);

		// 	foreach ($parts as $path_id) {
		// 		if (!$path) {
		// 			$path = $path_id;
		// 		} else {
		// 			$path .= '_' . $path_id;
		// 		}

		// 		$category_info = $this->model_catalog_category->getCategory($path_id);

		// 		if ($category_info) {
		// 			$data['breadcrumbs'][] = array(
		// 				'text' => $category_info['name'],
		// 				'href' => $this->url->link('product/category', 'path=' . $path)
		// 			);
		// 		}
		// 	}

		// 	// Set the last category breadcrumb
		// 	$category_info = $this->model_catalog_category->getCategory($category_id);

		// 	if ($category_info) {
		// 		$url = '';

		// 		if (isset($this->request->get['sort'])) {
		// 			$url .= '&sort=' . $this->request->get['sort'];
		// 		}

		// 		if (isset($this->request->get['order'])) {
		// 			$url .= '&order=' . $this->request->get['order'];
		// 		}

		// 		if (isset($this->request->get['page'])) {
		// 			$url .= '&page=' . $this->request->get['page'];
		// 		}

		// 		if (isset($this->request->get['limit'])) {
		// 			$url .= '&limit=' . $this->request->get['limit'];
		// 		}

		// 		$data['breadcrumbs'][] = array(
		// 			'text' => $category_info['name'],
		// 			'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
		// 		);
		// 	}
		// }

		// $this->load->model('catalog/manufacturer');

		// if (isset($this->request->get['manufacturer_id'])) {
		// 	$data['breadcrumbs'][] = array(
		// 		'text' => $this->language->get('text_brand'),
		// 		'href' => $this->url->link('product/manufacturer')
		// 	);

		// 	$url = '';

		// 	if (isset($this->request->get['sort'])) {
		// 		$url .= '&sort=' . $this->request->get['sort'];
		// 	}

		// 	if (isset($this->request->get['order'])) {
		// 		$url .= '&order=' . $this->request->get['order'];
		// 	}

		// 	if (isset($this->request->get['page'])) {
		// 		$url .= '&page=' . $this->request->get['page'];
		// 	}

		// 	if (isset($this->request->get['limit'])) {
		// 		$url .= '&limit=' . $this->request->get['limit'];
		// 	}

		// 	$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

		// 	if ($manufacturer_info) {
		// 		$data['breadcrumbs'][] = array(
		// 			'text' => $manufacturer_info['name'],
		// 			'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
		// 		);
		// 	}
		// }

		// if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
		// 	$url = '';

		// 	if (isset($this->request->get['search'])) {
		// 		$url .= '&search=' . $this->request->get['search'];
		// 	}

		// 	if (isset($this->request->get['tag'])) {
		// 		$url .= '&tag=' . $this->request->get['tag'];
		// 	}

		// 	if (isset($this->request->get['description'])) {
		// 		$url .= '&description=' . $this->request->get['description'];
		// 	}

		// 	if (isset($this->request->get['category_id'])) {
		// 		$url .= '&category_id=' . $this->request->get['category_id'];
		// 	}

		// 	if (isset($this->request->get['sub_category'])) {
		// 		$url .= '&sub_category=' . $this->request->get['sub_category'];
		// 	}

		// 	if (isset($this->request->get['sort'])) {
		// 		$url .= '&sort=' . $this->request->get['sort'];
		// 	}

		// 	if (isset($this->request->get['order'])) {
		// 		$url .= '&order=' . $this->request->get['order'];
		// 	}

		// 	if (isset($this->request->get['page'])) {
		// 		$url .= '&page=' . $this->request->get['page'];
		// 	}

		// 	if (isset($this->request->get['limit'])) {
		// 		$url .= '&limit=' . $this->request->get['limit'];
		// 	}

		// 	$data['breadcrumbs'][] = array(
		// 		'text' => $this->language->get('text_search'),
		// 		'href' => $this->url->link('product/search', $url)
		// 	);
		// }

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);


			$categories = $this->model_catalog_product->getCategories($product_info['product_id']);

			if($categories){
				$category_info = $this->model_catalog_category->getCategory($categories[1]['category_id']);
				$data['category_name'] = $category_info['name'];
			}

			if ($product_info['meta_title']) {
				$this->document->setTitle($product_info['meta_title']);
			} else {
				$this->document->setTitle($product_info['name']);
			}
			
			if ($product_info['noindex'] <= 0 && $this->config->get('config_noindex_status')) {
				$this->document->setRobots('noindex,follow');
			}
			
			if ($product_info['meta_h1']) {
				$data['heading_title'] = $product_info['meta_h1'];
			} else {
				$data['heading_title'] = $product_info['name'];
			}

			$data['href'] = $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id']);
			
			$this->document->setDescription($product_info['meta_description']);
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');
			$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['product_id'] = (int)$this->request->get['product_id'];

			$this->load->model('catalog/manufacturer');
			$data['manufacturer_object'] = $this->model_catalog_manufacturer->getManufacturer($product_info['manufacturer_id']);
			$data['manufacturer_object']['description'] = html_entity_decode($data['manufacturer_object']['description'], ENT_QUOTES, 'UTF-8');
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);

			$data['model'] = $product_info['model'];
			$data['sku'] = $product_info['sku'];
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');
			$data['config_product_set_title'] = $this->config->get('config_product_set_title');
			$data['config_product_set_text'] = $this->config->get('config_product_set_text');

			if ($product_info['quantity'] <= 0) {
				$data['stock'] = $product_info['stock_status'];
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];
			} else {
				$data['stock'] = $this->language->get('text_instock');
			}

			$this->load->model('tool/image');

			if ($product_info['image']) {
				$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$data['popup'] = '';
			}

			if ($product_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			} else {
				$data['thumb'] = '';
			}

			if ($product_info['image']) {
				$data['full'] = '/image/'.$product_info['image'];
			} else {
				$data['full'] = '';
			}

			if ($product_info['collection_image']) {
				$data['collection_image'] = '/image/'.$product_info['collection_image'];
			} else {
				$data['collection_image'] = '';
			}

			$data['points'] = array(
				'1' => array(
					'top' => $product_info['point_1_top'] ?? 20,
					'left' => $product_info['point_1_left'] ?? 50,
				),
				'2' => array(
					'top' => $product_info['point_2_top'] ?? 50,
					'left' => $product_info['point_2_left'] ?? 50,
				),
				'3' => array(
					'top' => $product_info['point_3_top'] ?? 80,
					'left' => $product_info['point_3_left'] ?? 50,
				)
			);

			$data['images'] = array();

			$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

			foreach ($results as $result) {
				$data['images'][] = array(
					'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
					'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height')),
					'full' => '/image/'.$result['image']
				);
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;
				$tax_price = (float)$product_info['price'];
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($this->request->get['product_id']);

			$data['discounts'] = array();

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}


			// custom size dependence
			if ( $product_info['size_depend'] ) {
				$sizes_list = array(
					'не' => 'один розмір',
		
					'34о' => '34',
					'35о' => '35',
					'36о' => '36',
					'37о' => '37',
					'38о' => '38',
					'39о' => '39',
					'40о' => '40',
					'41о' => '41',
					'42о' => '42',
					'43о' => '43',
					'44о' => '44',
					'45о' => '45',
					'46о' => '46',
		
					'36i' => 'XXS',
					'38i' => 'XS',
					'40i' => 'S',
					'42i' => 'M',
					'44i' => 'L',
					'46i' => 'XL',
					'48i' => 'XXL',
					'50i' => '3XL',
					'52i' => '4XL',
					'54i' => '5XL',
		
					'32F' => 'XXS',
					'34F' => 'XS',
					'36F' => 'S',
					'38F' => 'M',
					'40F' => 'L',
					'42F' => 'XL',
					'44F' => 'XXL',
					'46F' => '3XL',
					'48F' => '4XL',
					'50F' => '5XL',
		
					'25j' => 'XXS',
					'26j' => 'XS',
					'27j' => 'S',
					'28j' => 'M',
					'29j' => 'L',
					'30j' => 'XL',
					'31j' => 'XXL',
					'32j' => '3XL',
					'33j' => '4XL',
					'33j' => '5XL',
		
					'32' => 'XXS',
					'34' => 'XS',
					'36' => 'S',
					'38' => 'M',
					'40' => 'L',
					'42' => 'XL',
					'44' => 'XXL',
					'46' => '3XL',
					'48' => '4XL',
					'50' => '5XL',
					'52' => '6XL',
					
					'0'  => 'XXS',
					'1'  => 'XS',
					'2'   => 'S',
					'3'   => 'M',
					'4'   => 'L',
					'5'  => 'XL',
					'6' => 'XXL',
								
					'XXS' => 'XXS',
					'XS'  => 'XS',
					'S'   => 'S',
					'M'   => 'M',
					'L'   => 'L',
					'XL'  => 'XL',
					'XXL' => 'XXL',
					'3XL' => '3XL',
					'4XL' => '4XL',
					'5XL' => '5XL',
		
				);


				$size_depend = explode(',', $product_info['size_depend']);
				foreach ($size_depend as $item) {
					$product_sizes[$sizes_list[$item]] = $item;
				}
			}


			// custom size dependence


			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'size_eu'            	  => $option_value['size_eu'],
							'size_orig'               => $product_info['size_depend'] ? $product_sizes[$option_value['name']] : "",
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);

			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);
			// убрать из продажи если нет в наличии или есть характеристика Coming soon
			$data['in_stock'] = $product_info['quantity'] == 0 || $product_info['stock_status'] == 'Немає в наявності' ? false : true;

			if ( $data['attribute_groups'] ) {
				foreach ( $data['attribute_groups'] as $attribute_group ) {
					foreach ( $attribute_group['attribute'] as $attribute ) {
						if (  $attribute ['text'] == 'Coming soon' ) {
							$data['in_stock'] = false;
						}
					}
				}
			}

			$data['products'] = array();

			$results = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = '/image/'.$result['image'];
					// $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$categories_list = $this->model_catalog_product->getCategories($result['product_id']);
				$categories = array();

				if($categories_list){

					foreach ( $categories_list as $item ) {
						$category = $this->model_catalog_category->getCategory($item['category_id']);
						$categories[] = $category;
					}					

				}	

				$attribute_groups = $this->model_catalog_product->getProductAttributes($result['product_id']);

				$label_text = '';

				if ( $attribute_groups ) {
					foreach ( $attribute_groups as $attribute_group ) {
						foreach ( $attribute_group['attribute'] as $attribute ) {
							 
							switch ( $attribute ['text'] ) {
								case 'Coming soon' : {$label_text = 'Анонс'; break;}
								case 'Outlet' : {
									$percent = round((1 - $result['special'] / $result['price']) * 100);
									$label_text = $percent . '%';
									break;
								}
								case 'Sale' : {
									$percent = round((1 - $result['special'] / $result['price']) * 100);
									$label_text = $percent . '%';
									break;
								}
								default: {
								    if ( $result['special'] ) {
								        $percent = round((1 - $result['special'] / $result['price']) * 100);
    									$label_text = $percent . '%';
    									break;
								    }
								}
							}
							
						}
					}
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'manufacturer' => $result['manufacturer'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'categories'      => $categories,
					'price'       => $price,
					'special'     => $special,
					'label_text'	=> $label_text,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id']),
					'is_favorite' => ( isset($this->session->data['wishlist']) && in_array($result['product_id'], $this->session->data['wishlist']) ) ? true : false,

				);
			}

			$results = $this->model_catalog_product->getProductSet($this->request->get['product_id']);
			$data['product_set_has_discount'] = false;

			foreach ($results as $result) {
				if ($result['image']) {
					$image = '/image/'.$result['image'];
					// $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$categories_list = $this->model_catalog_product->getCategories($result['product_id']);
				$categories = array();

				if($categories_list){

					foreach ( $categories_list as $item ) {
						$category = $this->model_catalog_category->getCategory($item['category_id']);
						$categories[] = $category;
					}					

				}	

				$attribute_groups = $this->model_catalog_product->getProductAttributes($result['product_id']);

				$label_text = '';

				if ( $attribute_groups ) {
					foreach ( $attribute_groups as $attribute_group ) {
						foreach ( $attribute_group['attribute'] as $attribute ) {
							 
							switch ( $attribute ['text'] ) {
								case 'Coming soon' : {$label_text = 'Анонс'; break;}
								case 'Outlet' : {
									$percent = round((1 - $result['special'] / $result['price']) * 100);
									$label_text = $percent . '%';
									break;
								}
								case 'Sale' : {
									$percent = round((1 - $result['special'] / $result['price']) * 100);
									$label_text = $percent . '%';
									break;
								}
								default: {
								    if ( $result['special'] ) {
								        $percent = round((1 - $result['special'] / $result['price']) * 100);
    									$label_text = $percent . '%';
    									break;
								    }
								}
							}
							
						}
					}
				}

				if (!empty($result['set_discount'])) {
					$data['product_set_has_discount'] = true;
				}
				
				$data['product_set'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'manufacturer' => $result['manufacturer'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'categories'      => $categories,
					'price'       => $price,
					'special'     => $special,
					'label_text'	=> $label_text,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id']),
					'is_favorite' => ( isset($this->session->data['wishlist']) && in_array($result['product_id'], $this->session->data['wishlist']) ) ? true : false,

				);
			}

			$data['tags'] = array();

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = array(
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'tag=' . trim($tag))
					);
				}
			}

			$this->load->model('localisation/location');

			$manufacturer_locations = $this->model_catalog_manufacturer->getManufacturerLocations($product_info['manufacturer_id']);


			foreach((array)$this->config->get('config_location') as $location_id) {
				// Если у производителя есть привязанные локации — показываем только их
				// Если локаций нет — показываем все
				if (!empty($manufacturer_locations) && !in_array($location_id, $manufacturer_locations)) {
					continue;
				}
			
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
						'telephone2'  => $location_info['telephone2'],
						'email'       => $location_info['email'],
						'fax'         => $location_info['fax'],
						'image'       => $image,
						'images'      => $images,
						'open'        => nl2br($location_info['open']),
						'comment'     => $location_info['comment']
					);
				}
			}
			
			$data['locations'] = array_reverse($data['locations']);

			$data['telephone'] = $this->config->get('config_telephone');
			$data['email'] = $this->config->get('config_email');
			$data['telegram'] = $this->config->get('config_telegram');
			$data['viber'] = $this->config->get('config_viber');
			$data['contact'] = $this->url->link('information/contact', '', true);
			$data['delivery'] = $this->url->link('information/information&information_id=3', '', true);

			// Інформація під слайдером: тексти сторінок «Оплата», «Доставка», «Обмін та повернення», «Резервування товарів»
			$this->load->model('catalog/information');

			$data['product_info_tabs'] = array();

			foreach (array(6 => 'Оплата', 3 => 'Доставка', 5 => 'Обмін та повернення', 8 => 'Резервування товарів') as $information_id => $information_title) {
				$information_info = $this->model_catalog_information->getInformation($information_id);

				if ($information_info) {
					$information_description = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');
					// порожні абзаци (<p><br></p>) та порожні службові span
					$information_description = preg_replace(array('#<p>(\s|&nbsp;|<br\s*/?>)*</p>#iu', '#<span[^>]*>\s*</span>#iu'), '', $information_description);

					$data['product_info_tabs'][] = array(
						'id'          => $information_id,
						'title'       => $information_title,
						'description' => trim($information_description)
					);
				}
			}

			$data['recurrings'] = $this->model_catalog_product->getProfiles($this->request->get['product_id']);

			$this->model_catalog_product->updateViewed($this->request->get['product_id']);
			
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

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

	public function review() {
		$this->load->language('product/product');

		$this->load->model('catalog/review');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);

		$results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),
				'rating'     => (int)$result['rating'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		$this->response->setOutput($this->load->view('product/review', $data));
	}

	public function write() {
		$this->load->language('product/product');

		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error'] = $this->language->get('error_name');
			}

			if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
				$json['error'] = $this->language->get('error_text');
			}

			if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
				$json['error'] = $this->language->get('error_rating');
			}

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$json['error'] = $captcha;
				}
			}

			if (!isset($json['error'])) {
				$this->load->model('catalog/review');

				$this->model_catalog_review->addReview($this->request->get['product_id'], $this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getRecurringDescription() {
		$this->load->language('product/product');
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['recurring_id'])) {
			$recurring_id = $this->request->post['recurring_id'];
		} else {
			$recurring_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);
		
		$recurring_info = $this->model_catalog_product->getProfile($product_id, $recurring_id);

		$json = array();

		if ($product_info && $recurring_info) {
			if (!$json) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($recurring_info['trial_status'] == 1) {
					$price = $this->currency->format($this->tax->calculate($recurring_info['trial_price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_text = sprintf($this->language->get('text_trial_description'), $price, $recurring_info['trial_cycle'], $frequencies[$recurring_info['trial_frequency']], $recurring_info['trial_duration']) . ' ';
				} else {
					$trial_text = '';
				}

				$price = $this->currency->format($this->tax->calculate($recurring_info['price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				if ($recurring_info['duration']) {
					$text = $trial_text . sprintf($this->language->get('text_payment_description'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				} else {
					$text = $trial_text . sprintf($this->language->get('text_payment_cancel'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				}

				$json['success'] = $text;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
