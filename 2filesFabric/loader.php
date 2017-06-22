<?php																						// наш лаодер

define('APP_ROOT', __DIR__);			//константы на путь к файлу
define('DS', DIRECTORY_SEPARATOR);

spl_autoload_register('my_autoloader');		// встроенная функция на подключения своего загрузчика
function my_autoloader($name){				// моя функция автозагрузчика по ключу $name
	if(file_exists(APP_ROOT . DS . 'classes' . DS . $name . '.php')){ //если есть такой файл там, то
		$fileName = APP_ROOT . DS . 'classes' . DS . $name . '.php'; // filename - путь к файлу
	include_once $fileName; // разок заинклудить

	}
}

// asd
include_once 'loader.php';           // включили файл
my_autoloader($name);           // вызвали функцию моего автоподгребателя файлов класса 

echo "asd";