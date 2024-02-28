<?php


// inheritance 

class User
{

	public $username = null;
	public $address = null;

	public function __construct($name, $address)
	{
		$this->username = $name;
		$this->address = $address;
	}

	public function __destruct()
	{
		echo "{$this->username} and the address is {$this->address}";
	}
} // end user

##########################

class Admin extends User
{

	public $priv = null;

	// overriding 
	public function __construct($name, $address, $priv)
	{
		parent::__construct($name, $address);
		$this->priv = $priv;
	}

	// overriding
	public function __destruct()
	{
		parent::__destruct();
		echo " and priv = {$this->priv}";
	}
}


$user = new Admin('ahmed', 'alex', 1);
