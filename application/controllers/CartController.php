<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class CartController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function cart()
	{
		$this->load->view('cart.php');
	}
}
?>