<?php


interface u_ser
{
	public function get();
}

interface a_dmin
{
	public function set();
}


class SuperAdmin implements u_ser, a_dmin
{
	public function __construct()
	{

	}
	public function set()
	{

	}

	public function get()
	{

	}

}

$user = new SuperAdmin;





