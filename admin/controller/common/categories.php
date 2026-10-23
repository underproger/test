<?php
class ControllerCommonCategories extends Controller {
	public function index() {
		
		$attrs = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_attribute WHERE attribute_id = 15");

        

        // print("<pre>".print_r($attrs,true)."</pre>");
        $cats = array(
            'New' => '164',
            'Sale' => '165',
            'Outlet' => '166',
            'Анонс' => '167'
        );

        foreach ( $attrs->rows as $attr ) {

            // $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$attr['product_id'] . "', category_id = '" . (int)$cats[$attr['text']] . "'");
        }

        echo 'ok';
	}
}