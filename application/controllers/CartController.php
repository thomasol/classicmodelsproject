<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class CartController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function cart()
	{
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];			 
	        $this->load->view('cart', $data);
	    }
	    else
	    {
	    	$this->load->view('cart');
	    }
	}
}
?>