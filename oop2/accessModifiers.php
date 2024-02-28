<?php 


// access modifiers   public - protected - private

// encapsulation

class User {

	protected $username = null ;
	public $address = null ;

	public const HOST = 'localhost';

	public function __construct($name , $address)
	{
		$this->username = $name;
		$this->address = $address;

		echo self::HOST ;
	}	


} // end user

##########################

class Admin extends User {

	// getter method
	public function get()
	{
		if (false) {
			echo $this->username ;
		}
	}

} // end Admin


// $user = new Admin('ahmed' , 'cairo');

// echo $user -> get();


// echo User::HOST ;