<?php 
class ProductController extends CI_Controller {

 function __construct() {
	parent::__construct();
}
	 function displayProductsWithDataTable() {
		$tmpl = array (
			'table_open' => '<table id="productsTable" class="display" cellspacing="0" width="100%" >',
			'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',

            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',

            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',

            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',

            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',

            'table_close'           => '</table>'
			);


		$this->table->set_template($tmpl);
		$this->table->set_heading(array('Product Code', 'Name', 'Product Line',
										'Scale', 'Vendor', 'Description',
										'Price €', 'Image'));

		$data['Products'] = $this->ProductsModel->getProductsForCustomerDisplay();
		foreach ($data['Products'] as &$row) {
			$img = $row['image'];
			$row['image'] = img("assets/images/thumbs/" . $img);
		}
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];			 
	        $this->load->view('displayTable', $data);
	    }
	    else
	    {
	    	$this->load->view('displayTable', $data);
	    }
	}

	public function propductDetails() {
		if($this->session->userdata('logged_in')) {
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];			 
	        $this->load->view('productDetails', $data);
	    }
	    else {
	    	$this->load->view('productDetails');
	    }
	}

	public function wishlist() {

	}
}
?>