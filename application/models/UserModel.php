<?php
class UserModel extends CI_Model {
	 function __construct() {
        parent::__construct();
    }

	 function login($email, $password) {
		$this->db->where("email", $email);
		$this->db->where("password", MD5($password));

		$query=$this->db->get("user");
		if($query->num_rows() > 0) {
		 foreach($query->result() as $rows) {
		      $newdata = array(
		      'user_id'  => $rows->customerNumber,
		      'user_name'  => $rows->customerName,
		      'user_email'    => $rows->email,
		      'logged_in'  => TRUE,
		    );
		  }
		   $this->session->set_userdata($newdata);
		   return true;
	    }
		  return false;
	}

	function registerUser($customerName, $firstName, $lastName, $email, $password, $phone, $address1, $address2, $city, $state, $postalCode, $country) {
	    $data = array(
			'customerName' => $customerName,
			'contactFirstName' => $firstName,
			'contactLastName' => $lastName,
			'email' => $email,
			'password' => $this->hashPassword($password),
			'phone' => $phone,
			'addressLine1' => $address1,
			'addressLine2' => $address2,
			'city' => $city,
			'state' => $state,
			'country' => $country,
			'postalCode' => $postalCode,
			//'created_at' => date('Y-m-j H:i:s'),
		);
		return $this->db->insert('customers', $data);
	}

	function hashPassword($password)
	{
		return md5($password);
	}
}
?>