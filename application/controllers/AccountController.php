<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class AccountController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function account()
	{
		$this->load->view('account');
	}
}
?>