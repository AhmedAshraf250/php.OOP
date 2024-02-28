<?php


$users = new Database('users');

$users -> selectAll(); // return array 
$users -> select('id' , 5);
$users -> delete('id' , 5);
$users -> insert([
	'username' => 'ahmed' ,
	'password' => 123 ,
	'email'	   => 'ahmed@mail.com'
]);