<?php
class ProductsModel extends CI_Model {
	 function __construct()
    {
        parent::__construct();
    }

 function getAllProducts() {
	$resultset = $this->db->get('products');
	return $resultset->result_array();
	}
}
?>