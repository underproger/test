<?php
class ControllerCommonSize extends Controller {
	public function index() {
		$size = 'size_1c';
		
        // cбрасываем количество всех товаров на 0  
        $this->db->query("UPDATE " . DB_PREFIX . "product SET quantity = 0, shipping = 1, subtract = 0 WHERE 1");
        // дублируем поле с размером 
        $this->db->query("UPDATE " . DB_PREFIX . "product SET size_depend = `" . $size . "` WHERE 1");

		$size_query = $this->db->query("SELECT `product_id`, `" . $size . "` FROM " . DB_PREFIX . "product WHERE 1");

		$products = [];
		foreach($size_query->rows as $row) {
			if (!empty($row[$size])) {
				$products[$row['product_id']] = $row[$size];
			}
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
		

		$update_array = [];
		foreach ($products as $product_id => $product_size) {
            $sizes = explode(',', $product_size);
            $product_sizes = array();
            $product_sizes_depend = array();

            foreach ($sizes as $item) {
                $product_sizes[] = $sizes_list[$item];

                if ( !array_key_exists($item, $sizes_list) ) {
                }
            }

            $update_array[] = [
                'product_id' => $product_id,
                'product_sizes' => $product_sizes,
            ];
        }

        $size_option_id = 11;
        
        // получам id опции и её название
        $option_value_description_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value_description WHERE option_id = '" . (int)$size_option_id . "'");
		
        foreach($option_value_description_query->rows as $row) {
            $option_value_description[$row['option_value_id']] = mb_strtolower($row['name']);
        }

		foreach ($update_array as $update) {
            // получаем опцию размера товара
            $option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option WHERE product_id = '" . (int)$update['product_id'] . "' and option_id = '" . (int)$size_option_id . "'");
            $product_option_id = 0; // id опции размера товара
            $product_count = 0;

            // если у товара есть размеры
            if ( $option_query->num_rows > 0 ) {
                $product_option_id = $option_query->row['product_option_id'];

                // получаем все размеры товара
                $option_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value WHERE product_option_id = '" . (int)$product_option_id . "' and product_id = '" . (int)$update['product_id'] . "' and option_id = '" . (int)$size_option_id . "'");

                // убираем из запасов все размеры товара
                foreach($option_value_query->rows as $row) {
                    $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = '0', subtract='1' WHERE product_option_id = '" . (int)$product_option_id . "' and product_id = '" . (int)$update['product_id'] . "' and option_id = '" . (int)$size_option_id . "'");
                }

                // обновляем запасы размеров товара
                foreach( $update['product_sizes'] as $product_size ) {
                    $option_value_id = array_search(mb_strtolower($product_size), $option_value_description);
                    $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = '1', subtract='0' WHERE product_option_id = '" . (int)$product_option_id . "' and product_id = '" . (int)$update['product_id'] . "' and option_id = '" . (int)$size_option_id . "' and option_value_id = '" . (int)$option_value_id . "'");
                    


                    // добавляем размер, если его не существовало у товара
                    if ($this->db->countAffected() > 0) {
                    } else {
                         $this->db->query("INSERT INTO " . DB_PREFIX . "product_option_value SET product_option_id = '" . (int)$product_option_id . "', product_id = '" . (int)$update['product_id'] . "', option_id = '" . (int)$size_option_id . "', option_value_id = '" . (int)$option_value_id . "', quantity='1', subtract='0', price='0.0000', price_prefix='+', points='0', points_prefix='+', weight='0.00000000', weight_prefix='+'");
                    }
                    
                    $product_count++;
                }
                
            } else {
                // добавляем опцию размера товара
                $this->db->query("INSERT INTO " . DB_PREFIX . "product_option SET product_id = '" . (int)$update['product_id'] . "', option_id = '" . (int)$size_option_id . "', value = '' , required = '1'");
                $product_option_id = $this->db->getLastId();

                // добавляем размеры товара
                foreach( $update['product_sizes'] as $product_size ) {
                    $option_value_id = array_search(mb_strtolower($product_size), $option_value_description);
                    
                    $this->db->query("INSERT INTO " . DB_PREFIX . "product_option_value SET product_option_id = '" . (int)$product_option_id . "', product_id = '" . (int)$update['product_id'] . "', option_id = '" . (int)$size_option_id . "', option_value_id = '" . (int)$option_value_id . "', quantity='1', subtract='0', price='0.0000', price_prefix='+', points='0', points_prefix='+', weight='0.00000000', weight_prefix='+'");
                    
                    $product_count++;
                }
            }

            // обновляем количество товара  
            $this->db->query("UPDATE " . DB_PREFIX . "product SET quantity = '" . (int)$product_count . "' WHERE product_id = '" . (int)$update['product_id'] . "'");
            // ставим товар в наличие  
            $this->db->query("UPDATE " . DB_PREFIX . "product SET stock_status_id = 7 WHERE product_id = '" . (int)$update['product_id'] . "'");
            // удаляем содержимое поля size_1c  
            $this->db->query("UPDATE " . DB_PREFIX . "product SET size_1c = '' WHERE 1");
        }
        echo 'ok';
	}
}