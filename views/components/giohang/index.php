<?php 
$cart=loadModel('ConnectDB');
$account=unserialize($_COOKIE['dangnhap']);
include_once('models/Cart.php');
$choNgoi = array(
	"A1","A2","A3","A4","A5","A6","A7","A8","A9","A10","A11","A12","A13","A14","A15",
	"B1","B2","B3","B4","B5","B6","B7","B8","B9","B10","B11","B12","B13","B14","B15",
	"C1","C2","C3","C4","C5","C6","C7","C8","C9","C10","C11","C12","C13","C14","D15",
	"D1","D2","D3","D4","D5","D6","D7","D8","D9","D10","D11","D12","D13","D14","D15",
	"E1","E2","E3","E4","E5","E6","E7","E8","E9","E10","E11","E12","E13","E14","E15",
	"F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12","F13","F14","F15",
	"G1","G2","G3","G4","G5","G6","G7","G8","G9","G10","G11","G12","G13","G14","G15", 
	"H1","H2","H3","H4","H5","H6","H7","H8","H9","H10","H11","H12","H13","H14","H15",
	"I1","I2","I3","I4","I5","I6","I7","I8","I9","I10","I11","I12","I13","I14","I15",
	"K1","K2","K3","K4","K5","K6","K7","K8","K9","K10","K11","K12","K13","K14","K15",
	"L1","L2","L3","L4","L5","L6","L7","L8","L9","L10","L11","L12","L13","L14","L15",
	"M1","M2","M3","M4","M5","M6","M7","M8","M9","M10","M11","M12","M13","M14","M15",
	"N1","N2","N3","N4","N5","N6","N7","N8","N9","N10","N11","N12","N13","N14","N15"
				);
$list_cart = array();
$array_cart=$cart->get_array_cart($account['ID']);
foreach ($array_cart as $cart) {
	$list_cart[]= new Cart($cart['ID'],$cart['name'],$cart['id_film'],$cart['seat'],$cart['price'],$cart['price_sale'],$cart['is_checked']);
}
$stt=0;
if (isset($_POST['color'])) {
	$abc=loadModel('ConnectDB');
	$max_bill=$abc->get_count_bill();
	
	foreach($_POST['color'] as $value) {
	 	foreach ($list_cart as $cart_item) {
	 		if ($value==$cart_item->get_id()) {
	 			$abc->insert_bill(((int)$max_bill+1), $cart_item->get_id_film(),$cart_item->get_seat(),date("Y-m-d"), $account['ID']);
	 			$abc->deleteCart($value);
	 			unset($cart_item);
	 		}
	 	}
	}
	echo "<script>window.location = 'index.php?option=giohang'</script>";

}


?>
<script type="text/javascript">

	function total_pay(input) {
	  	var checkBox = document.getElementsByClassName("myCheck");
	  	var text = document.getElementById("it_total");
	  	var tt_tt= Number(text.textContent);
	  	var text2 = document.getElementById("it_chon");
	  	var tt_it = Number(text2.textContent);
	  	var check=0;
	  	for (i=0;i<checkBox.length;i++){
	  		if(checkBox[i].checked==true){
	    		check++;
	    	}
	  	}

	  	if(check>tt_it){
	  		tt_tt+=Number(input);		
	  	}else if(check<tt_it){
	  		tt_tt-=Number(input);
	  	}else{

	  	}
	  	tt_it=check;
	  	text.innerHTML= ""+tt_tt.toFixed(3);
	  	text2.innerHTML = ""+tt_it;
	}

	function bookingTicket() {	
		confirm("Đặt vé thành công! Vui lòng chờ xác nhận.");
	}

	function delete_item(filmName){
		confirm("Đã xóa sản phẩm '"+ filmName+"'");
	}
</script>
<div class="container-lg wapper wapper-cart">
	<div class="header-cart">
		<h1 class="tt-header-cart">Giỏ hàng</h1>
	</div>
	<?php if ($list_cart==null): ?>
		<div class="alert alert-warning" role="alert">
  			Giỏ hàng đang trống
		</div>
	<?php else: ?>
		<form action="" method="post">
			<table class="table table-cart">
			<thead>
				<tr>
					<th>#</th>
					<th>Chọn</th>
					<th>Sản phẩm</th>
					<th>Ghế</th>
					<th>Đơn giá</th>
					<th>Thành tiền</th>
					<th>Thao tác</th>
				</tr>
			</thead>
				<tbody>
					
					<?php foreach ($list_cart as $itemCart): ?>

						<tr>
							<td><?php echo ++$stt; ?></td>
							<td> 
								
								<?php if ($itemCart->get_is_checked()==1): ?>
									<input type="checkbox"  class="myCheck" onclick="total_pay(<?php 
										echo number_format($itemCart->get_sale_price(),0,',','.'); 
									?>)" checked="checked" name="color[]" id="color" value="<?php echo $itemCart->get_id(); ?>">
								<?php else: ?>
									<input type="checkbox" class="myCheck" onclick="total_pay(<?php 
										echo number_format($itemCart->get_sale_price(),0,',','.'); 
									?>)" name="color[]" id="color" value="<?php echo $itemCart->get_id(); ?>">
								<?php endif ?>
							 </td>
							<td><?php echo $itemCart->get_name(); ?></td>
							<td>
							<?php echo $itemCart->get_seat(); ?>
									
							</td>
							<td>	
								<p class="price-sale">đ<?php 
										echo number_format($itemCart->get_sale_price(),0,',','.'); 
									?>								
								</p>
								<p class="price">đ<?php 
										echo number_format($itemCart->get_price(),0,',','.'); 
									?>
								</p>
							</td>
							<td>₫<?php echo number_format($itemCart->get_sale_price(),0,',','.'); ?></td>
							<td>
								<a href="?option=giohang&actcart=delete&id_cart=<?php echo $itemCart->get_id(); ?>" class="btn btn-danger" onclick="return delete_item('<?php echo $itemCart->get_name(); ?>');"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
								<a href="?option=giohang&actcart=update&id_cart=<?php echo $itemCart->get_id(); ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Cập nhật</a>
							</td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td><?php echo ++$stt; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>đ<span id="it_total"><?php 
								$total=0;
								foreach ($list_cart as $list_item) {
									if ($itemCart->get_is_checked()==1){
										$total+=$list_item->get_sale_price();
									}
								}
								echo  number_format($total,0,',','.');
							?>
						</span>
						</td>
						<td> 
							<span id="it_chon">
								<?php 
									$total_chon=0;
									foreach ($list_cart as $list_item) {
										if ($itemCart->get_is_checked()==1){
											$total_chon++;
										}
									}
									echo  number_format($total_chon,0,',','.');
								?>
							</span>
						</td>
					</tr>
				</tbody>
		</table>
		<div class="accept-cart">
			<input type="submit" name="" class="btn btn-danger" value="Thanh toán" onclick="bookingTicket()">
		</div>
	</form>
	<?php endif ?>

</div>
<?php 
	
?>