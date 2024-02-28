<?php 


trait File {

	public static $file = null ;

	public function validateFile()
	{
		// validate logic
		
		// clean code 

		if (!$this->ifExist()) return false ;

		if (!$this->checkExt()) return false ;

		if (!$this->checkSize()) return false ;

		echo "passed";

	}

	public function ifExist()
	{
		if (self::get('error') == 0 ) {
			return true ;
		}

		$this->errors['images'] = 'you must upload an image';
		return false ;
	}

	public function checkExt()
	{
		// ext
		$extensions = ['jpg' , 'png' , 'gif'];
		$ext = pathinfo(self::get('name') , PATHINFO_EXTENSION);

		if (in_array($ext, $extensions)) {

			return true ;

		}

		$this->errors['images'] = 'wrong extension';

		return false ;
	}

	public function checkSize()
	{
		// size
		if (self::get('size') < 200000) {
			return true ;
		}

		$this->errors['images'] = 'file size is too big';
		return false ;
	}

	public static function get($value)
	{
		$key = array_keys(static::$file)[0];
		return static::$file[$key][$value];
	}

}