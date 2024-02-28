<?php

// multi inheritance

trait User
{

	public $username = null;
	public $password = null;

	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}
} // end user 

#######################################

trait Admin
{

	public function __destruct()
	{
		echo $this->username;
	}
} // end Admin

#######################################

class SuperUser
{

	use User, Admin;
}

#######################################

$user = new User('ali', 1231);
