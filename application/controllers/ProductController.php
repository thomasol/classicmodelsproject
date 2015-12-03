<?php 
class ProductController extends CI_Controller {

 function __construct() {
	parent::__construct();
}
	 function displayProductsWithDataTable() {
		$tmpl = array (
			'table_open' => '<table id="productsTable" class="display" cellspacing="0" width="100%" >',
			'heading_row_start' => '<tr>',
			'heading_row_end' => '</tr>',
			'heading_cell_start' => '<th>',
			'heading_cell_end' => '</th>',
			'row_start' => '<tr>',
			'row_end' => '</tr>',
			'cell_start' => '<td>',
			'cell_end' => '</td>',
			'row_alt_start' => '<tr>',
			'row_alt_end' => '</tr>',
			'cell_alt_start' => '<td>',
			'cell_alt_end' => '</td>',
			'table_close' => '</table>'
			);


		$this->table->set_template($tmpl);
		$this->table->set_heading(array('Product Code', 'Product Name', 'Product Line',
										'Product Scale', 'Product Vendor', 'Product Description',
										'Quantity', 'Buy Price', 'MSRP', 'Image'));

		$data['Products'] = $this->ProductsModel->getAllProducts();

		foreach ($data['Products'] as &$row) {
			$img = $row['image'];
			$row['image'] = img("assets/images/thumbs/" . $img);
		}

		$this->load->view('displayTable', $data);
	}

	function checkout() 
	{
		$this->load->view('checkout');
	}

	function cart() 
	{
		$this->load->view('cart');
	}

	public function productDetails()
	{
		$this->load->view('productDetails');
	}
}
?>