<?php 

class User {

	public static $passLen = 5 ;

	public static function checkPass($str)
	{

		if (strlen($str) < static::$passLen) {
			return false ;
		}

		return true ;

	} 


} // end user

$x = User::checkPass('111');

var_dump($x);