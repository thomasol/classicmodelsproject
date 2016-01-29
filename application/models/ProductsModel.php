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

	function getProductsForCustomerDisplay() {
		$this->db->select('productCode, productName, productLine, productScale, productVendor, productDescription, MSRP, image'); 
		$query = $this->db->get('products');
		return $query->result_array();
	}

 function getSixRandomProducts() {
	$this->db->limit(3);
	$this->db->order_by('productCode', 'RANDOM');
	$resultset = $this->db->get('products');

	return $resultset->result_array();
	}

function getFeaturedItems() {
	$this->db->limit(6);
	$this->db->where('featuredItem', 1);
	// $resultset = $this->db->get_where('products', array('featuredItem = 1'));
	$resultset = $this->db->get('products');
	return $resultset->result_array();
	}
function getCategories() {
	$this->db->group_by('productLine');
	$resultset = $this->db->get('products');

	return $resultset->result_array();
}

function getVendors() {
	$this->db->group_by('productVendor');
	$resultset = $this->db->get('products');

	return $resultset->result_array();
}

function getProductsFromCategory($category) {
	$this->db->group_by('productLine');
	$this->db->where('productLine', $category['productLine']);
	$resultset = $this->db->get('products');
	return $resultset->result_array();
}

}
?>