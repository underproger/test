<?php
class ModelDesignBanner extends Model {
    public function getBanner($banner_id) {
        $query = $this->db->query("
            SELECT bi.*
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi ON (b.banner_id = bi.banner_id)
            WHERE b.banner_id = '" . (int)$banner_id . "'
            AND b.status = '1'
            AND bi.language_id = '" . (int)$this->config->get('config_language_id') . "'
            ORDER BY bi.sort_order ASC
        ");

        $results = array();

        foreach ($query->rows as $row) {
            $product_query = $this->db->query("
                SELECT product_id
                FROM " . DB_PREFIX . "banner_image_product
                WHERE banner_image_id = '" . (int)$row['banner_image_id'] . "'
                ORDER BY sort_order ASC
            ");

            $row['products'] = array_column($product_query->rows, 'product_id');

            $results[] = $row;
        }

        return $results;
    }
}