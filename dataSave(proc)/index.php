<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
<body> 
 
<form action = "functions.php" method="post">
 <textarea name="comment" cols="40" rows="3"></textarea></p>
<select name = "storage" >
<option value = "1">Выбрать</option>
<option value = "text1.txt" name = "text1.txt">Text1</option>
<option value = "text2.txt" name = "text2.txt">Text2</option>
 
<input type = "submit" value = Отправить>
 </form>
 
</body>
</html>
========================================================================================================
 
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