<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	</head>
<body>	

<form action = "" method="post">
 <textarea name="comment" cols="40" rows="3"></textarea></p>
<input type = "submit" value = Отправить>

</form>
</body>
</html>

<?php
//include 'loader.php';
//my_autoloader($name);

class Storage{

	public function __construct(){
		$this->getPath();
	}
	public function getPath(){
		$file = file_get_contents('config.txt');
		$filename = [];
		$fileConfig = explode(':', $file);
		$this->filename = $fileConfig[1];
	}

	public function setMessage(){

		if($_POST['comment']){
	
		$content = $_POST['comment'];
		$save = fopen($this->filename, 'a+'); 
		fwrite($save, $content . " "); 
		fclose($save); 
		echo "All GOOD";
		
	    }   
	}
};

$saveMassage = new Storage;
$saveMassage->setMessage();


