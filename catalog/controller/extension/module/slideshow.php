<?php
class ControllerExtensionModuleSlideshow extends Controller {
    public function index($setting) {
        static $module = 0;

        $this->load->model('design/banner');
        $this->load->model('tool/image');
		$this->load->model('catalog/product');


        $data['banner_id']   = $setting['banner_id'];
        $data['banner_name'] = $setting['name'];
        $data['banners']     = array();
        $data['current_date'] = date('Y-m-d');

        $results = $this->model_design_banner->getBanner($setting['banner_id']);

        foreach ($results as $result) {
            if (is_file(DIR_IMAGE . $result['image'])) {

                $products = array();

                foreach ($result['products'] as $product_id) {
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

							$products[] = array(
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

                $data['banners'][] = array(
                    'label'      => $result['label'],
                    'title'      => $result['title'],
                    'text'       => $result['text'],
                    'button'       => $result['button'],
                    'link'       => $result['link'],
                    'date_start' => $result['date_start'],
                    'date_end'   => $result['date_end'],
                    'sort_order' => $result['sort_order'],
                    'image'      => '/image/' . $result['image'],
                    'is_video'   => stripos($result['image'], '.mp4') > 0,
                    'is_full'    => $result['is_full'],
                    'products'   => $products,
                );
            }
        }

        $data['module'] = $module++;

        return $this->load->view('extension/module/slideshow', $data);
    }
}