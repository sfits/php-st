<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	</head>
<body>	

<form action = "" method="post">
 <textarea name="comment" cols="40" rows="3"></textarea></p>
<input type = "submit" value = 'Send'>

<?php
include_once 'loader.php';
my_autoloader($name);

$obj = Factory::writeTo();
echo $obj->write();
?>

</form>
</body>
=======
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	</head>
<body>	

<form action = "" method="post">
 <textarea name="comment" cols="40" rows="3"></textarea></p>
<input type = "submit" value = 'Send'>

<?php
include 'loader.php';
my_autoloader($name);

$obj = Factory::writeTo();
echo $obj->write();
?>
</form>
</body>
>>>>>>> 0503113c3ace15c0478d0dd34fffdfb22a050079
</html>