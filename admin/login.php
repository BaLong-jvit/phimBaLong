<?php
session_start();
define('BASEPATH', true);
include_once('../config.php');
include_once('core/Database.php');
include_once('core/load.php');
if(isset($_POST['login_admin'])){
	$admin_user=$_REQUEST['userName_admin'];
	$admin_pass=$_REQUEST['passWord_admin'];
	if (!isset($admin_user) || !isset($admin_pass)) {
		echo "<script>confirm('Tên đăng nhập và mật khẩu không được để trống!');</script>";
	}else{
		$account=loadModel('ConnectDB');
		$isAccount=$account->checkAccount($admin_user);
		if (isset($isAccount)) {
			$admin=$account->get_account($admin_user,$admin_pass);
			if (isset($admin)) {
				$cookie_name="login_admin";
                setcookie($cookie_name, serialize($admin) , time() + 3600, "/");
                echo "<script>window.location = 'index.php'</script>";
			}else{
				echo "<script>confirm('Mật khẩu không chính xác!');</script>";
			}
		}else{
			echo "<script>confirm('Tài khoản chưa được đăng ký!');</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng nhập vào hệ thống</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	    <!--Fontawesome CDN-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<!--Custom styles-->
		<link rel="stylesheet" type="text/css" href="../public/css/admin_css.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
		    if ( window.history.replaceState ) {
		        window.history.replaceState( null, null, window.location.href );
		    }
		</script>
	</head>
	<body>
		<div class="login-bg">
		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Đăng nhập</h3>
						<div class="d-flex justify-content-end social_icon">
							<span><i class="fab fa-facebook-square"></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
						</div>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="userName_admin" class="form-control" placeholder="username">
								
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="passWord_admin" class="form-control" placeholder="password">
							</div>
							<div class="row align-items-center remember">
								<input type="checkbox">Nhớ tài khoản
							</div>
							<div class="form-group">
								<input type="submit" name="login_admin" value="Đăng nhập" class="btn float-right login_btn">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Chưa có tài khoản?<a href="#">Liên hệ để được cung cấp</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Quên mật khẩu?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			
	</body>
</html>