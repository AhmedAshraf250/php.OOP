<?php 


class File {

	public $file = null ;

	public function __construct($fileName)
	{
		$this->file = $fileName;
	}

	public function write($data)
	{
		$handler = fopen($this->file, 'w');
		fwrite($handler, $data);
		fclose($handler);
	}

	public function read()
	{
		$handler = fopen($this->file, 'r');
		$read = fread($handler, filesize($this->file));
		fclose($handler);
		return $read ;
	}


}

####################################
$file = new File('test.txt');
$file -> write('welcome to php');
echo $file -> read();


$file2 = new File('index.php');
$file2 -> write("<?php echo 'test'; ?>");