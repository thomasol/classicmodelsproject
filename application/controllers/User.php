<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->index();
		// if(($this->session->userdata('userName')!=""))
		// {
		// 	$this->welcome();
		// }
		// else
		// {
		// 	$data['title'];
		// }
	}
	public function login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('pass'));

		$result = $this->userModel->login($email, $password);

		if($result) 
		{
			$this->welcome();
		}
		else
		{
			$this->index();
		}
	}
	public function registration()
	{
		$this->form_validation->set_rules('userName', 'User Name', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('emailAddress', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('conPassword', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->userModel->addUSer();
			$this->thank();
		}
	}

	public function logout()
	{
		$newdata = array(
			'userName' => '',
			'userEmail' => '',
			'loggedIn' => FALSE,
			);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this0>index();
	}
}
?>