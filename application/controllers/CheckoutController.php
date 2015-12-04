<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class CheckoutController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function checkout()
	{
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];			 
	        $this->load->view('checkout', $data);
	    }
	    else
	    {
	    	$this->load->view('checkout');
	    }
	}
}
?>