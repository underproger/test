<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['robots'] = $this->document->getRobots();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');
		
		
		$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
		if ($this->request->server['REQUEST_URI'] == '/') {
			$data['og_url'] = $this->url->link('common/home');
		} else {
			$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
		}
		
		$data['og_image'] = $this->document->getOgImage();
		

		$data['categories'] = array();
		$data['categories_new'] = array();
		$data['categories_sale'] = array();
		$data['categories_outlet'] = array();
		$data['categories_coming_soon'] = array();
		$categories = $this->model_catalog_category->getCategories();

		$exclude_cats = array('164','165','166','167','168','184');

		if ( $categories ) {
			foreach ( $categories as $category ) {
				if ( !in_array($category['category_id'], $exclude_cats) ) {
					$data['categories'][] = array(
						'name' => $category['name'],
						'href' =>  $this->url->link('product/category', 'path=' . $category['category_id'], true),
					);
					$data['categories_new'][] = array(
						'name' => $category['name'],
						'href' =>  $this->url->link('product/category', 'path=' . $category['category_id'] .  '&ocf=F15S2V3278505735', true),
					);
					$data['categories_sale'][] = array(
						'name' => $category['name'],
						'href' =>  $this->url->link('product/category', 'path=' . $category['category_id'] . '&ocf=F15S2V2100390394', true),
					);
					$data['categories_outlet'][] = array(
						'name' => $category['name'],
						'href' =>  $this->url->link('product/category', 'path=' . $category['category_id'] . '&ocf=F15S2V2936939167', true),
					);
					$data['categories_coming_soon'][] = array(
						'name' => $category['name'],
						'href' =>  $this->url->link('product/category', 'path=' . $category['category_id'] . '&ocf=F15S2V179546008', true),
					);
				}

			}
		}
		
		
		$this->load->model('catalog/manufacturer');

		$data['manufacturers'] = array();
		$manufacturers = $this->model_catalog_manufacturer->getManufacturers();

		if ( $manufacturers ) {
			foreach ( $manufacturers as $manufacturer ) {
				$filter_data = array(
					'filter_manufacturer_id' => $manufacturer['manufacturer_id'],
				);
	
				$product_total = (int)$this->model_catalog_product->getTotalProductsOptimized($filter_data);
				
				if ($product_total > 0 && $manufacturer['sort_order'] != 0 ) {
					$data['manufacturers'][] = array(
						'name' => $manufacturer['name'],
						'href' =>  $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id'],  true),
					);
					$data['manufacturers_new'][] = array(
						'name' => $manufacturer['name'],
						'href' =>  $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id'] .  '&ocf=F15S2V3278505735', true),
					);
					$data['manufacturers_sale'][] = array(
						'name' => $manufacturer['name'],
						'href' =>  $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id'] .  '&ocf=F15S2V2100390394', true),
					);
					$data['manufacturers_outlet'][] = array(
						'name' => $manufacturer['name'],
						'href' =>  $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id'] .  '&ocf=F15S2V2936939167', true),
					);
					$data['manufacturers_coming_soon'][] = array(
						'name' => $manufacturer['name'],
						'href' =>  $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id'] .  '&ocf=F15S2V179546008', true),
					);
				}
			}
		}
		
		$this->load->model('catalog/information');

		// $information_info = $this->model_catalog_information->getInformation('12');

		// if ($information_info) {
		// 	$sales = json_decode($information_info['sales']);
		// 	if ( $sales ) {
		// 		$data['sales_list'] = $sales[0];
		// 	}
		// }

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');
			
			$p_wishlist = $this->model_account_wishlist->getWishlist();
			
			if( !empty($p_wishlist) ) {
				foreach( $p_wishlist as $val ) {

					if( isset($this->session->data['wishlist']) && !in_array($val['product_id'], $this->session->data['wishlist']) ) {
					    $this->session->data['wishlist'][] = $val['product_id'];
				    } else if ( !isset($this->session->data['wishlist']) ) {
					    $this->session->data['wishlist'][] = $val['product_id'];
					}
				}
			}


			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		

		// Totals
		$this->load->model('setting/extension');

		$totals = array();
		$taxes = $this->cart->getTaxes();
		$total = 0;

		// Because __call can not keep var references so we put them into an array.
		$total_data = array(
			'totals' => &$totals,
			'taxes'  => &$taxes,
			'total'  => &$total
		);
			
		// Display prices
		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			$sort_order = array();

			$results = $this->model_setting_extension->getExtensions('total');

			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}

			array_multisort($sort_order, SORT_ASC, $results);

			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);

					// We have to put the totals in an array so that they pass by reference.
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}

			$sort_order = array();

			foreach ($totals as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $totals);
		}

		$data['text_items'] = sprintf('%s', $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0), $this->currency->format($total, $this->session->data['currency']));
		
		$data['home'] = $this->url->link('common/home', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');

		$data['newest'] = $this->url->link('product/category&path=164');
		$data['brands'] = $this->url->link('product/manufacturer', '', true);
		$data['collections'] = $this->url->link('product/category&path=184');
		$data['sales'] = $this->url->link('information/information&information_id=22');
		$data['sale'] = $this->url->link('product/category&path=165');
		$data['outlet'] = $this->url->link('product/category&path=166');
		$data['futured'] = $this->url->link('product/category&path=167');

		$data['telephone'] = $this->config->get('config_telephone');
		$data['top_header_message'] = '';
		$top_header_message_date_start = $this->config->get('config_comment_date_start');
		$top_header_message_date_end = $this->config->get('config_comment_date_end');
		$current_date = date('Y-m-d');
		if ( ( !$top_header_message_date_start || $top_header_message_date_start == '0000-00-00' || $current_date >= $top_header_message_date_start ) 
			&& ( !$top_header_message_date_end || $top_header_message_date_end == '0000-00-00' || $current_date <= $top_header_message_date_end ) )
		{
			$data['top_header_message'] = $this->config->get('config_comment');
		}

		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['currency'] = $this->load->controller('common/currency');
		if ($this->config->get('configblog_blog_menu')) {
			$data['blog_menu'] = $this->load->controller('blog/menu');
		} else {
			$data['blog_menu'] = '';
		}
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
