<?php 


class User {

	public $username  ;
	public $address  ;

	// setter
	public function __construct($name , $address)
	{
		$this->username = $name ;
		$this->address = $address ;
	}

	public function __destruct() // magic method 
	{
		echo "user`s name is {$this->username} and address = {$this->address} " ;
	}
} // end class
###########################################
// $user = new User('ali' , 'Cairo') ;
$file = new File('test.txt');
$file -> write('welcome to php');
$file -> read();





