<?php


class Str
{

	public static function random($num = 10)
	{
		$randomString = 'ABCDEFGHKLNQOZabcdefghklmnopq12345678';

		$str = '';

		for ($i = 0; $i < $num; $i++) {

			$str .= $randomString[mt_rand(0, strlen($randomString) - 1)];
		}

		return $str;
	}
}


echo Str::random(30);
