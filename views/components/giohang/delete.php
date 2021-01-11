<?php
	$id_delete=$_REQUEST['id_cart'];
	$delete=loadModel('ConnectDB');
	$delete->deleteCart($id_delete);
	echo "<script>window.location = 'index.php?option=giohang'</script>";
?>