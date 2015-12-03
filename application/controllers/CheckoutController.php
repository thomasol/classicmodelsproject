<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class CheckoutController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function checkout() 
	{
		$this->load->view('checkout');
	}
}
?>