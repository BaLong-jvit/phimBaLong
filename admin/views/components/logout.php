<?php 
	$cookie_name='login_admin';
	$cookie_value='';
	setcookie($cookie_name, $cookie_value, time() - 3600, "/"); // 86400 = 1 day
	echo "<script>window.location = '../../index.php'</script>";
 ?>