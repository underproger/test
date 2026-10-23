<?php
class ControllerCommonPhoto extends Controller {
	public function index() {
		
		$model = 'model'; //можно поменять на sku, upc и тп
		
		$model_query = $this->db->query("SELECT `product_id`, `" . $model . "` FROM " . DB_PREFIX . "product WHERE 1 AND (image = '' OR image IS NULL)");
		$products = [];
		foreach($model_query->rows as $row) {
			if (!empty($row[$model])) {
				$products[$row['product_id']] = $row[$model];
			}
		}
		
		$image_dir = DIR_IMAGE . 'catalog/products/';
		$update_array = [];
		foreach ($products as $product_id => $model) {
			$i = 0;
			
			$images = glob($image_dir . $model . '*');
			sort($images);
			if (empty($images)) continue;
			
			$first_photo = str_replace(DIR_IMAGE, '',array_shift($images));
			$additional_images = [];
			foreach ($images as $img) {
				$additional_images[] = str_replace(DIR_IMAGE, '', $img);
			}
			
			$update_array[] = [
				'product_id' => $product_id,
				'model' => $model,
				'image' => $first_photo,
				'images' => $additional_images
				];
		}
		
		foreach ($update_array as $update) {
			$this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape($update['image']) . "' WHERE product_id = '" . (int)$update['product_id'] . "'");
			if (!empty($update['images'])) {
				$this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$update['product_id'] . "'");
				$i = 1;
				foreach($update['images'] as $image) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_image SET product_id = '" . (int)$update['product_id'] . "', image = '" . $this->db->escape($image) . "', sort_order = '" . (int)$i . "'");
					$i++;
				}
			}
		}
		echo 'ok'; 
		
	}
}