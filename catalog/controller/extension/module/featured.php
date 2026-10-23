<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');
		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();
		$data['name'] = $setting['name'];
		
		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}


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

		$products = array();
		
		if (!empty($setting['product'])) {
			if ( array_key_exists('module_id', $setting) && $setting['module_id'] == 40 ) {
				if ( array_key_exists('productIds', $_COOKIE) ) {
					$products = json_decode($_COOKIE['productIds']);
				}
			} else if ( $setting['module_id'] == 39 ) {
				$filter_data = array(
					'filter_category_id' => '165',
					'filter_filter' => '',
					'sort'               => 'p.sort_order',
					'order'              => "ASC",
					'start'              => 0,
					'limit'              => 100
				);

				$products_sales = $this->model_catalog_product->getProducts($filter_data);

				if ( $products_sales ) {
					foreach ($products_sales as $product) {
						if ($product['product_id']) {
							$products[] = $product['product_id'];
						}
					}
				}
			}  else if ( $setting['module_id'] == 28 ) {
				$filter_data = array(
					'filter_category_id' => '164',
					'filter_filter' => '',
					'sort'               => 'p.sort_order',
					'order'              => "ASC",
					'start'              => 0,
					'limit'              => 100
				);

				$products_sales = $this->model_catalog_product->getProducts($filter_data);

				if ( $products_sales ) {
					foreach ($products_sales as $product) {
						if ($product['product_id']) {
							$products[] = $product['product_id'];
						}
					}
				}
			} else {
				$products = array_slice($setting['product'], 0, (int)$setting['limit']);
			} 
			if ( $products ) {
				foreach ($products as $product_id) {
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

							if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
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

							$attribute_groups = $this->model_catalog_product->getProductAttributes($product_info['product_id']);

							$label_text = '';
						
							if ( $attribute_groups ) {
								foreach ( $attribute_groups as $attribute_group ) {
									foreach ( $attribute_group['attribute'] as $attribute ) {
										
										switch ( $attribute ['text'] ) {
											case 'Coming soon' : {$label_text = 'Анонс'; break;}
											case 'Outlet' : {
												$percent = round((1 - $product_info['special'] / $product_info['price']) * 100);
												$label_text = $percent . '%';
												break;
											}
											case 'Sale' : {
												$percent = round((1 - $product_info['special'] / $product_info['price']) * 100);
												$label_text = $percent . '%';
												break;
											}
											default: {
            								    if ( $product_info['special'] ) {
            								        $percent = round((1 - $product_info['special'] / $product_info['price']) * 100);
                									$label_text = $percent . '%';
                									break;
            								    }
            								}
										}

									}
								}
							}

							$options = array();

							foreach ($this->model_catalog_product->getProductOptions($product_info['product_id']) as $option) {
								$product_option_value_data = array();

								foreach ($option['product_option_value'] as $option_value) {
									if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
										$product_option_value_data[] = array(
											'name'                    => $option_value['name'],
										);
									}
								}

								$options[] = array(
									'product_option_value' => $product_option_value_data,
								);
							}

							$data['products'][] = array(
								'product_id'  => $product_info['product_id'],
								'thumb'       => $image,
								'second_image'       => $second_image,
								'name'        => $product_info['name'],
								'manufacturer' => $product_info['manufacturer'],
								'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
								'price'       => $price,
								'special'     => $special,
								'label_text'	=> $label_text,
								'tax'         => $tax,
								'rating'      => $rating,
								'categories'      => $categories,
								'options'      => $options,
								'main_category_href' => $this->url->link('product/category', 'path=' . $categories[0]['category_id']),
								'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
								'is_favorite' => ( isset($this->session->data['wishlist']) && in_array($product_info['product_id'], $this->session->data['wishlist']) ) ? true : false,

							);

						}
					}
				}
			}
		}
		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}