<?php
//include 'loader.php';
//my_autoloader($name);
abstract class Storage{
	public $filename;

	public function write()
	{
		if($_POST['comment'])
			{	
				$content = $_POST['comment'];
				$save = fopen($this->filename, 'a+'); 
				fwrite($save, $content . " "); 
				fclose($save); 
				echo "All GOOD";
				// var_dump($this->filename);
			}
	}
}