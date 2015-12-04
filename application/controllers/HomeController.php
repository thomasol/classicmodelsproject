<?php 
class HomeController extends CI_Controller {

 function __construct() {
   parent::__construct();
 }

 function index() {
	
    if($this->session->userdata('logged_in')) {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	   $this->load->view('index', $data);
   }
   else 
     $this->load->view('login');
   }
}

?>