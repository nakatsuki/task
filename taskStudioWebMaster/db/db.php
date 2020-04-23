<?php 
$connection = mysqli_connect('localhost', 'root', '', 'money);
if($connection == false)
{
	echo "not conected <br>";
	echo mysqli_connect_error();
	die();
}
 ?>
