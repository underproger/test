<?php

class ModelExtensionModuleDiscounts extends Model {
    public function getSameCategoryDiscountProduct($ids, $discount_same_category, $target) {
        $products = implode(",", $ids);
        $similars = array();

        $product_to_category = array();
        $categories = array();

        foreach ($ids as $product_id) {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id ='" . $product_id . "'");

            foreach ($query->rows as $value) {
                $product_to_category[] = array(
                    'product_id'    => $value['product_id'],
                    'category_id'   => $value['category_id']
                );
            }
        }

        foreach ($product_to_category as $value) {
            if (empty($categories[$value['category_id']])) {
                $categories[$value['category_id']] = 1;
            } else {
                $categories[$value['category_id']]++;
            }
        }

        foreach ($categories as $category_id => $value) {
            if ($value >= $discount_same_category) {
                $query_similars = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE category_id = '" . $category_id . "' AND product_id IN (" . $products . ")");
            
                foreach ($query_similars->rows as $product) {
                    $similars[] = $product['product_id'];
                }
            }
        }
        
        if (!$similars) {
            return false;
        } else {
            $similars = implode(",", $similars);

            if ($target == 1) {
                $query = $this->db->query("SELECT product_id, price FROM " . DB_PREFIX . "product WHERE product_id IN (" . $products . ") ORDER BY price ASC LIMIT 1");
            } else if ($target == 2) {
                $query = $this->db->query("SELECT product_id, price FROM " . DB_PREFIX . "product WHERE product_id IN (" . $products . ") ORDER BY price DESC LIMIT 1");
            } else {
                return false;
            }

            return $query->row;            
        }
    }

    public function getDiscountProduct($ids, $discount_same_category, $target=1) {
        $products = implode(",", $ids);

        if ($target == 1) {
            $query = $this->db->query("SELECT product_id, price FROM " . DB_PREFIX . "product WHERE product_id IN (" . $products . ") ORDER BY price ASC LIMIT 1");
        } else if ($target == 2) {
            $query = $this->db->query("SELECT product_id, price FROM " . DB_PREFIX . "product WHERE product_id IN (" . $products . ") ORDER BY price DESC LIMIT 1");
        } else {
            return false;
        }

        return $query->row;
    }

    public function getProductDiscount($data) {
        $query = $this->db->query("SELECT price FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . $data['product_id'] . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND quantity <= '". $data['quantity'] ."' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW()))");

        return $query->rows;
    }

}
