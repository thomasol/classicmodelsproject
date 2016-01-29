<?php 
if (!defined('BASEPATH')) exit('No direct cript access allowed');
class UserController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['sixRandomProducts'] = $this->ProductsModel->getSixRandomProducts();
		$data['featuredItems'] = $this->ProductsModel->getFeaturedItems();
		$data['categories'] = $this->ProductsModel->getCategories();
		$data['vendors'] = $this->ProductsModel->getVendors();
		$data['b'] = $this->ProductsModel->getAllProducts();
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];	
		    $this->load->view('headerLoggedIn', $data);	 
	        $this->load->view('index');
	    }
	    else
	    {
	    	$this->load->view('header', $data);
	    	$this->load->view('index');
	    }
	}

	public function login()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];	
			$this->load->view('index', $data);
		}
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == false) 
		{
			$this->load->view('header');
			$this->load->view('login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->UserModel->login($username, $password);
			if($result)
			{
				foreach($result as $row) 
				{
					$sess_array = array('username'=>$username);
					$this->session->set_userdata('logged_in', $sess_array);
					redirect('UserController/index');
				}
			}
			else
			{
				$this->load->view('header');
				$this->load->view('login');
			}
		}
	}

	public function verifyLogin()
	{

		$email = $this->input->post('email');
		$password = md5($this->input->post('pass'));

		$result = $this->UserModel->login($email, $password);

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
		$this->form_validation->set_rules('customerName', 'Customer Name', 'trim|required|min_length[4]|is_unique[customers.customerName]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('fName', 'First Name', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('lName', 'Last Name', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[customers.email]', array('isUnique' => 'This email already exists, try logging in.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('cPassword', 'Password Confirmation', 'trim|required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[6]|max_length[20]|numeric');
		$this->form_validation->set_rules('address1', 'Address Line 1', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('address2', 'Address Line 2', 'trim|min_length[6]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('state', 'State', 'trim|min_length[2]');
		$this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|alpha_numeric|min_length[3]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|min_length[2]');


		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('login');
		}
		else
		{
			$customerName = $this->input->post('customerName');
			$firstName = $this->input->post('fName');
			$lastName = $this->input->post('lName');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$address1 = $this->input->post('address1');
			$address2 = $this->input->post('address2');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$postalCode = $this->input->post('postalCode');
			$country = $this->input->post('country');
			if ($this->UserModel->registerUser($customerName, $firstName, $lastName, $email, $password, $phone, $address1, $address2, $city, $state, $postalCode, $country))
			{
				$sess_array = array(
				    'username'=>$email
				);
				$this->session->set_userdata('logged_in', $sess_array);
				redirect('UserController/index');
			}
			else
			{
				$data->error = 'There was a problem creating your account. Please try again.';
				$this->load->view('header');
				$this->load->view('login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('UserController/index');
	}

	public function contactUs()
	{
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];			 
	        $this->load->view('contactUs', $data);
	    }
	    else
	    {
	    	$this->load->view('contactUs');
	    }
	}
}
?>