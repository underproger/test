<?php
 
class ModelExtensionTotalDiscounts extends Model {
	public function getTotal($total) {
		$this->load->language('extension/total/discounts');
		$this->load->model('catalog/product');
		$this->load->model('extension/module/discounts');
		$this->load->model('account/customer');

		if ($this->config->get('total_discounts_status')) {
			$status = true;
		} else {
			$status = false;
		}

		$customer_groups_qty = $this->config->get('total_discounts_customer_groups_qty');
		$customer_groups_summ = $this->config->get('total_discounts_customer_groups_summ');

		if (isset($this->session->data['customer_id'])) {
			$customer_info = $this->model_account_customer->getCustomer($this->session->data['customer_id']);

			if (isset($customer_info['customer_group_id'])) {
				$customer_group_id = $customer_info['customer_group_id'];
			} else {
				$customer_group_id = 1;
			}
		} else {
			$customer_group_id = 1;
		}

		if ($status) {
			$discounts = 0;

			$get_sub_total = 0;
			
			$ids = array();
			$products = array();
			
			$discount_same = false;
			$discount_quantity = $this->config->get('total_discounts_same_category');;
			$total_discounts_in_same = $this->config->get('total_discounts_in_same');
			$discount_quantity_val = $this->config->get('total_discounts_same_category_val');
			$discount_summ = $this->config->get('total_discounts_summ');
			$discount_summ_val = $this->config->get('total_discounts_summ_val');
			$target = $this->config->get('total_discounts_target');
			$priority_summ = $this->config->get('total_discounts_priority');

			$products_in_cart = $this->cart->getProducts();

			foreach ($products_in_cart as $product) {		
				$product_info = $this->model_catalog_product->getProduct($product['product_id']);
				$product_discount = $this->model_extension_module_discounts->getProductDiscount($product);

				if ($this->config->get('total_discounts_special')) {
					if ($product['quantity'] > 1) {
						$qty = $product['quantity'];
						
						while ($qty) {
							$ids[] = $product['product_id'];
							$qty--;
						}
					} else {
						$ids[] = $product['product_id'];
					}

					$get_sub_total += $product['price'] * $product['quantity'];
				} else if (!$product_info['special'] && !$product_discount) {
					if ($product['quantity'] > 1) {
						$qty = $product['quantity'];
						
						while ($qty) {
							$ids[] = $product['product_id'];
							$qty--;
						}
					} else {
						$ids[] = $product['product_id'];
					}

					$get_sub_total += $product['price'] * $product['quantity'];
				}
			}


			$summ_user_in_group = true;

			if ($customer_groups_summ) {
				if (!in_array($customer_group_id, $customer_groups_summ)) {
					$summ_user_in_group = false;
				}
			}

			$qty_user_in_group = true;

			if ($customer_groups_qty) {
				if (!in_array($customer_group_id, $customer_groups_qty)) {
					$qty_user_in_group = false;
				}
			}

			if ($priority_summ && $get_sub_total >= $discount_summ && $summ_user_in_group && $discount_summ_val) {
				$discounts = $get_sub_total / 100 * $discount_summ_val;

				$title = sprintf($this->language->get('text_discount_summ'), $discount_summ_val);

				$total['totals'][] = array(
					'code'       => 'discounts',
					'title'      => $title,
					'value'      => $discounts,
					'sort_order' => $this->config->get('total_discounts_sort_order')
				);
				
				$total['total'] -= $discounts;
			} else if (count($ids) >= $discount_quantity && $qty_user_in_group && $discount_quantity_val) {
				if ($total_discounts_in_same) {
					$product = $this->model_extension_module_discounts->getSameCategoryDiscountProduct($ids, $discount_quantity, $target);
				} else {
					$product = $this->model_extension_module_discounts->getDiscountProduct($ids, $discount_quantity, $target);
				}

				if ($product) {
					$product_info = $this->model_catalog_product->getProduct($product['product_id']);
					$discounts = $product['price'] / 100 * $discount_quantity_val;

					$title = sprintf($this->language->get('text_discount_similar'), $discount_quantity_val) . '"'. $product_info['name'] . '"';
	
					$total['totals'][] = array(
						'code'       => 'discounts',
						'title'      => $title,
						'value'      => $discounts,
						'sort_order' => $this->config->get('total_discounts_sort_order')
					);
					
					$total['total'] -= $discounts;
				} else if ($target == 3) {
					$discounts = $get_sub_total / 100 * $discount_quantity_val;

					$title = sprintf($this->language->get('text_discount_qty'), $discount_quantity_val);
	
					$total['totals'][] = array(
						'code'       => 'discounts',
						'title'      => $title,
						'value'      => $discounts,
						'sort_order' => $this->config->get('total_discounts_sort_order')
					);
					
					$total['total'] -= $discounts;
				}
			} else if ($get_sub_total >= $discount_summ && $summ_user_in_group && $discount_summ_val) {
				$discounts = $get_sub_total / 100 * $discount_summ_val;

				$title = sprintf($this->language->get('text_discount_summ'), $discount_summ_val);

				$total['totals'][] = array(
					'code'       => 'discounts',
					'title'      => $title,
					'value'      => $discounts,
					'sort_order' => $this->config->get('total_discounts_sort_order')
				);
				
				$total['total'] -= $discounts;
			}
		}
	}
}