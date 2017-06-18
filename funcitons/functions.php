<?php 

define('APP_ROOT', __DIR__); //определяем константу
define('DS', DIRECTORY_SEPARATOR); //заменяем на короткие

function writeData(){
	if($_POST['comment']){
		
	    $path = APP_ROOT . DS . $_POST['storage'] . '.txt';
		
	    	$directory = $path; //переменная - путь
			$content = $_POST['comment']; //то, что будем добавлять
			$save = fopen($directory, 'a+'); //открываем файл по пути
			fwrite($save, $content . " "); //делаем запись
			fclose($save); //закрываем файл
			echo "All GOOD";
		}	
    
    else{
    	echo "ALL BAD";
    }
    return $data;
}
writeData();
