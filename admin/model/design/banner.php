<?php
class ModelDesignBanner extends Model {
	public function addBanner($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "banner SET name = '" . $this->db->escape($data['name']) . "', status = '" . (int)$data['status'] . "'");

		$banner_id = $this->db->getLastId();

		if (isset($data['banner_image'])) {
			foreach ($data['banner_image'] as $language_id => $value) {
				foreach ($value as $banner_image) {
					$is_full = array_key_exists('is_full', $banner_image) ? (bool)$this->db->escape($banner_image['is_full']) : 0;

					$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image SET banner_id = '" . (int)$banner_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($banner_image['title']) . "', label = '" . $this->db->escape($banner_image['label']) . "', text = '" . $this->db->escape($banner_image['text']) . "', button = '" . $this->db->escape($banner_image['button']) . "', link = '" . $this->db->escape($banner_image['link']) . "', image = '" . $this->db->escape($banner_image['image']) . "', is_full = '" . $is_full . "', date_start = '" . $this->db->escape($banner_image['date_start']) . "', date_end = '" . $this->db->escape($banner_image['date_end']) . "', sort_order = '" . (int)$banner_image['sort_order'] . "'");

					$banner_image_id = $this->db->getLastId();

					// Зберігаємо товари слайду
					if (!empty($banner_image['products'])) {
						foreach ($banner_image['products'] as $key => $product_id) {
							$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image_product SET banner_image_id = '" . (int)$banner_image_id . "', product_id = '" . (int)$product_id . "', sort_order = '" . $key . "'");
						}
					}
				}
			}
		}

		return $banner_id;
	}

	public function editBanner($banner_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "banner SET name = '" . $this->db->escape($data['name']) . "', status = '" . (int)$data['status'] . "' WHERE banner_id = '" . (int)$banner_id . "'");

		// Видаляємо товари всіх слайдів цього банера перед перезаписом
		$banner_image_query = $this->db->query("SELECT banner_image_id FROM " . DB_PREFIX . "banner_image WHERE banner_id = '" . (int)$banner_id . "'");

		foreach ($banner_image_query->rows as $row) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "banner_image_product WHERE banner_image_id = '" . (int)$row['banner_image_id'] . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "banner_image WHERE banner_id = '" . (int)$banner_id . "'");

		if (isset($data['banner_image'])) {
			foreach ($data['banner_image'] as $language_id => $value) {
				foreach ($value as $banner_image) {
					$is_full = array_key_exists('is_full', $banner_image) ? (bool)$this->db->escape($banner_image['is_full']) : 0;

					$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image SET banner_id = '" . (int)$banner_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($banner_image['title']) . "', label = '" . $this->db->escape($banner_image['label']) . "', text = '" . $this->db->escape($banner_image['text']) . "', button = '" . $this->db->escape($banner_image['button']) . "', link = '" . $this->db->escape($banner_image['link']) . "', image = '" . $this->db->escape($banner_image['image']) . "', is_full = '" . $is_full . "', date_start = '" . $this->db->escape($banner_image['date_start']) . "', date_end = '" . $this->db->escape($banner_image['date_end']) . "', sort_order = '" . (int)$banner_image['sort_order'] . "'");

					$banner_image_id = $this->db->getLastId();

					// Зберігаємо товари слайду
					if (!empty($banner_image['products'])) {
						foreach ($banner_image['products'] as $key => $product_id) {
							$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image_product SET banner_image_id = '" . (int)$banner_image_id . "', product_id = '" . (int)$product_id . "', sort_order = '" . $key . "'");
						}
					}
				}
			}
		}
	}

	public function deleteBanner($banner_id) {
		// Видаляємо товари всіх слайдів цього банера
		$banner_image_query = $this->db->query("SELECT banner_image_id FROM " . DB_PREFIX . "banner_image WHERE banner_id = '" . (int)$banner_id . "'");

		foreach ($banner_image_query->rows as $row) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "banner_image_product WHERE banner_image_id = '" . (int)$row['banner_image_id'] . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "banner WHERE banner_id = '" . (int)$banner_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "banner_image WHERE banner_id = '" . (int)$banner_id . "'");
	}

	public function getBanner($banner_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "banner WHERE banner_id = '" . (int)$banner_id . "'");

		return $query->row;
	}

	public function getBanners($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "banner";

		$sort_data = array(
			'name',
			'status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getBannerImages($banner_id) {
		$banner_image_data = array();

		$banner_image_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_image WHERE banner_id = '" . (int)$banner_id . "' ORDER BY sort_order ASC");

		foreach ($banner_image_query->rows as $banner_image) {

			// Підвантажуємо товари слайду
			$products = array();

			$product_query = $this->db->query("SELECT product_id FROM " . DB_PREFIX . "banner_image_product WHERE banner_image_id = '" . (int)$banner_image['banner_image_id'] . "'");

			foreach ($product_query->rows as $product) {
				$products[] = $product['product_id'];
			}

			$banner_image_data[$banner_image['language_id']][] = array(
				'banner_image_id' => $banner_image['banner_image_id'],
				'label'           => $banner_image['label'],
				'title'           => $banner_image['title'],
				'text'            => $banner_image['text'],
				'button'            => $banner_image['button'],
				'link'            => $banner_image['link'],
				'image'           => $banner_image['image'],
				'is_full'         => $banner_image['is_full'],
				'date_start'      => $banner_image['date_start'],
				'date_end'        => $banner_image['date_end'],
				'sort_order'      => $banner_image['sort_order'],
				'products'        => $products,
			);
		}

		return $banner_image_data;
	}

	public function getTotalBanners() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "banner");

		return $query->row['total'];
	}
}