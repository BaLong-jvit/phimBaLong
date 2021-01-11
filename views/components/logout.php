<?php 
	$cookie_name='dangnhap';
	$cookie_value='';
	setcookie($cookie_name, $cookie_value, time() - 3600, "/"); // 86400 = 1 day
	header('location:../../index.php');
 	die();
 ?>