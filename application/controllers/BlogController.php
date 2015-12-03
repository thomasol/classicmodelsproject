<?php 
class BlogController extends CI_Controller {

 function __construct() {
	parent::__construct();
}
	 public function blogList()
	 {
	 	$this->load->view('blog');
	 }

	 public function blogSingle()
	 {
	 	$this->load->view('blogSingle');
	 }
}
?>