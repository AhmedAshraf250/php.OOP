<?php 

class Validate {

	use File ;

	public $formData = null ;
	public $errors = [] ;

	public function __construct($formData, $files)
	{
		$this->formData = $formData;
		static::$file = $files;
	}

	public function validator()
	{
		$this->checkUsername($this->formData['username']);
		$this->checkEmail($this->formData['email']);
		$this-> validateFile();

		return $this->errors;
	}

	public function checkUsername($val)
	{
		// clean 
		// xss  cross site scripting

		$val = $this->clean($val);

		if (empty($val)) {
			$this->errors['username'] = 'username can`t be empty';
		}

	}

	public function checkEmail($val)
	{

		$val = $this->clean($val);

		if (empty($val)) {

			$this->errors['email'] = 'email can`t be empty';

		} else {

			if (!filter_var($val , FILTER_VALIDATE_EMAIL)) {

				$this->errors['email'] = 'invalid email';

			}

		} 
	}


	public function clean($val)
	{
		$val = trim($val);
		$val =  htmlspecialchars($val) ;

		return $val ;
	}


} // end class