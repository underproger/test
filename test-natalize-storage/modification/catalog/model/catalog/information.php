<?php
class ModelCatalogInformation extends Model {
	public function getInformation($information_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "information i LEFT JOIN " . DB_PREFIX . "information_description id ON (i.information_id = id.information_id) LEFT JOIN " . DB_PREFIX . "information_to_store i2s ON (i.information_id = i2s.information_id) WHERE i.information_id = '" . (int)$information_id . "' AND id.language_id = '" . (int)$this->config->get('config_language_id') . "' AND i2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND i.status = '1'");

    if ($this->config->get('mlseo_enabled') && $query->num_rows && $this->config->get('mlseo_multistore') && $this->config->get('config_store_id')) {
      $this->load->model('tool/seo_package');
      $seoDescription = $this->model_tool_seo_package->getSeoDescription('information', $query->row['information_id']);
      
      if (!empty($seoDescription['meta_title'])) {
        $query->row['meta_title'] = $seoDescription['meta_title'];
      }
      
      if (!empty($seoDescription['meta_description'])) {
        $query->row['meta_description'] = $seoDescription['meta_description'];
      }
      
      if (!empty($seoDescription['meta_keyword'])) {
        $query->row['meta_keyword'] = $seoDescription['meta_keyword'];
      }
      
      if (!empty($seoDescription['name'])) {
        $query->row['title'] = $seoDescription['name'];
      }
      
      if (isset($seoDescription['description']) && trim(strip_tags($seoDescription['description']))) {
        $query->row['description'] = $seoDescription['description'];
      }
      
      if (!empty($seoDescription['seo_h1'])) {
        $query->row['seo_h1'] = $seoDescription['seo_h1'];
      }
      
      if (!empty($seoDescription['seo_h2'])) {
        $query->row['seo_h2'] = $seoDescription['seo_h2'];
      }
      
      if (!empty($seoDescription['seo_h3'])) {
        $query->row['seo_h3'] = $seoDescription['seo_h3'];
      }
    }
      

		return $query->row;
	}

	public function getInformations() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information i LEFT JOIN " . DB_PREFIX . "information_description id ON (i.information_id = id.information_id) LEFT JOIN " . DB_PREFIX . "information_to_store i2s ON (i.information_id = i2s.information_id) WHERE id.language_id = '" . (int)$this->config->get('config_language_id') . "' AND i2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND i.status = '1' ORDER BY i.sort_order, LCASE(id.title) ASC");

    if ($this->config->get('mlseo_enabled') && $query->num_rows && $this->config->get('mlseo_multistore') && $this->config->get('config_store_id')) {
      $this->load->model('tool/seo_package');
      foreach ($query->rows as &$row) {
        $seoDescription = $this->model_tool_seo_package->getSeoDescription('information', $row['information_id']);
        if (!empty($seoDescription['name'])) {
          $row['title'] = $seoDescription['name'];
        }
      }
    }
      

		return $query->rows;
	}

	public function getInformationBrand($information_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "information i LEFT JOIN " . DB_PREFIX . "information_brand id ON (i.information_id = id.information_id) LEFT JOIN " . DB_PREFIX . "information_to_store i2s ON (i.information_id = i2s.information_id) WHERE i.information_id = '" . (int)$information_id . "' AND id.language_id = '" . (int)$this->config->get('config_language_id') . "' AND i2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND i.status = '1'");

		return $query->row;
	}

	public function getInformationLayoutId($information_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_to_layout WHERE information_id = '" . (int)$information_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getInformationManufacturerId($manufacturer_name) {
		$query = $this->db->query("SELECT `manufacturer_id` FROM " . DB_PREFIX . "manufacturer WHERE name = '" . $manufacturer_name . "'");
		if ($query->num_rows) {
			return $query->row['manufacturer_id'];
		} else {
			return 0;
		}
	}
	public function getInformationIdByManufacturer($manufacturer_name) {
		$query = $this->db->query("SELECT `information_id` FROM " . DB_PREFIX . "information_brand WHERE block_1_title = '" . $manufacturer_name . "'");
		if ($query->num_rows) {
			return $query->row['information_id'];
		} else {
			return 0;
		}
	}
}