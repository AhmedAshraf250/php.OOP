<?php


abstract class Usertest
{

	public $username = null;
	public $password = null;

	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	// abstract function
	public abstract function login();
} // end user 

#######################################

class Admintest extends Usertest
{

	public function login()
	{
		echo $this->username;
	}
} // end Admin


#######################################

$admin = new Admintest('ahmed', 12345);

$admin->login();

#######################################
