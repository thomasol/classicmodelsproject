<?php
class UserModel extends CI_Model 
{
	 function __construct() 
	 {
        parent::__construct();
    }

	public function registerUser($customerName, $firstName, $lastName, $email, $password, $phone, $address1, $address2, $city, $state, $postalCode, $country) 
	{
		$password = MD5($password);
	    $data = array(
			'customerName' => $customerName,
			'contactFirstName' => $firstName,
			'contactLastName' => $lastName,
			'email' => $email,
			'password' => $password,
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

	function login($username, $password) {
		$this -> db -> select('email, password');
		$this -> db -> from('customers');
		$this -> db -> where('email', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);
 
		$query = $this -> db -> get();
 
		if($query -> num_rows() == 1) 
			return $query->result_array();
	   else
			return false;
	}	
}
?>