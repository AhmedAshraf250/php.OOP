<?php 

class User {

	public static $username = 'ahmed';

	public static function set($name)
	{
		static::$username  = $name;

		echo static::$username ;
	}

}


// echo User::$username ;

User::set('kareem');