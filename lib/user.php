<?php 
	
	include_once 'Session.php';
	include 'Database.php';
	
	class User
	{
		private $db;
		public function __construct()
		{
			$this->db=new Database();
		}
		 public function userRegistation($data)
		{
			$name     =$data['name'];
			$username =$data['username'];
			$email    =$data['email'];
			$password =md5($data['password']);

			if ($name=="" || $username=="" || $email=="" || $password=="") {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>Field must not be empty</div>";
				return $msg;
			}

				if (strlen($username<3)) {
					$msg="<div class='alert alert-danger'><strong>Error !</strong>User name is too short</div>";
				return $msg;
				}

				if (filter_var($email,FILTER_VALIDATE_EMAIL)==false) {
					$msg="<div class='alert alert-danger'><strong>Error !</strong>Invalid Email</div>";
				return $msg;
				}

		}
	}


 ?>