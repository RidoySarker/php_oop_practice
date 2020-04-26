<?php

class Login
{
	private $db;
	function __construct()
	{
		$this->db = new Database;
	}

	public function login($log_data) 
	{
		$email = $log_data['email'];
		$password = md5($log_data['password']);
		if(empty($email)||empty($password)) {
			echo "Email & Password Required";
		}
		else if(!filter_var($email.FILTER_VALIDATE_EMAIL)) {
			echo "Email Not Valid";
		} else {
			$login_data = $this->db->select("user", "email='$email' AND password='$password'");
			if($this->db->connect->affected_rows>0) {
				$fetch=$login_data->fetch_assoc();
				Session::set("login",true);
				Session::set("email",$fetch['email']);
				Session::set("userid",$fetch['id']);
				header('Location:../index.php');
			} else {
				echo "Email Or Password Wrong";
			}
		}
	}
}