<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Phim Mới | Phim hay | Xem phim nhanh | Xem phim online | Phim HD vietsub hay nhất</title>
		
		<!-- bootstrap -->
		<link rel="stylesheet" href="./public/css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="./public/css/font-awesome.min.css">
		<link rel="stylesheet"  href="./public/css/webcss.css">
		<script type="text/javascript" rel="stylesheet"  src="./public/js/webjs.js"></script>

		<script>
		    if ( window.history.replaceState ) {
		        window.history.replaceState( null, null, window.location.href );
		    }
		</script>
	</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="container-lg wapper ">
				<nav class="navbar navbar-expand-lg navbar-dark d-flex">
					<button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				    	<span class="navbar-toggler-icon"></span>
					</button>
				  	<a class="navbar-brand mr-auto" href="index.php">
				  		<img class="logo" src="./public/image/logo.png" alt="">
				  	</a>
				  	<div class="flex-grow-1 search">
				  		<form id="search" action="" method="POST" role="form">
				  			<input id="inputSearch" type="text" name="keyword" placeholder="Tìm: tên phim, đạo diễn, diễn viên" value="">
			  				<input id="searchSubmit" class="" type="submit">
				  		</form>
				  	</div>
				  	<div class="collapse navbar-collapse flex-grow-0" id="collapsibleNavbar">
					    <?php 
					    loadModule('menutop'); 
					    ?>

				  	</div>  
				</nav>
			</div>
		</div>
		<!-- end header -->
		<!-- content -->
		<div class="content">
			<?php loadComponent(); ?>
		</div>
		<!-- end content -->
		<hr>
		<!-- footer -->
		<div class="footer">
			<?php loadModule('footer'); ?>
			<div class="copy-right">
				Copyright Ⓒ 2019 dienanh.vn
			</div>
		</div>
		<!-- end footer -->

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="./public/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	</body>
</html>