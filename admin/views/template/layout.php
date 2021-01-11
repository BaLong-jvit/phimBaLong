<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Phim Mới | Phim hay | Xem phim nhanh | Xem phim online | Phim HD vietsub hay nhất</title>
		
		<!-- bootstrap -->
		<link rel="stylesheet" href="../public/css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="../public/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../public/css/admin_css.css">

		

		<script>
		    if ( window.history.replaceState ) {
		        window.history.replaceState( null, null, window.location.href );
			}
			const body = document.getElementsByTagName('body');
			function collapseSidebar(){
				body[0].classList.toggle('sidebar-expand');
			}
			window.onclick = function(event){
				openCloseDropdown(event);
			}
			function closeAllDropdown(){
				var dropdowns = document.getElementsByClassName('dropdown-expand');
				for(var i=0;i<dropdowns.length;i++){
					dropdowns[i].classList.remove('dropdown-expand');
				}
			}
			function openCloseDropdown(event){
				if(!event.target.matches('.dropdown-toggle')){
					closeAllDropdown();
				}
				else{
					var toggle = event.target.dataset.toggle;
					var content = document.getElementById(toggle);
					if (content.classList.contains('dropdown-expand')){
						closeAllDropdown();
					}else{
						closeAllDropdown();
						content.classList.add('dropdown-expand');
					}
				}
			}
		</script>
	</head>
	<body class="overlay-scrollbar">
		<?php loadModule('menutop');		?>
		<!-- end navbar -->
		<div class="sidebar overlay-scrollbar">
			<?php loadModule('sidebar');	?>
		</div>
		<!-- end sidebar -->
		<div class="wapper">
			<?php loadComponent();	?>
		</div>
		<!-- end main content -->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../public/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>