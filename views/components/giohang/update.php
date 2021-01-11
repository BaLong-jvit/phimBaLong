<?php
	$id_update=$_REQUEST['id_cart'];
	$update=loadModel('ConnectDB');
	$item_update=$update->get_cart_update($id_update);
	$country_film=$update->get_country($item_update['id']); 
	$cat_film=$update->get_category_film($item_update['id']);
	$year_film=$update->get_year_film($item_update['id']);
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
	"N1","N2","N3","N4","N5","N6","N7","N8","N9","N10","N11","N12","N13","N14","N15");
	if (array_key_exists('formUpdate', $_POST)) {
		$seat_update=$_REQUEST['cars'];
		$phoneNumber_update=(isset($_REQUEST['phoneNumber']))?$_REQUEST['phoneNumber']:'null';
		$sql_string="UPDATE db_giohang SET seat= '$seat_update' ,comment='$phoneNumber_update' WHERE id=$id_update";
		$update->queryNoResult($sql_string);
		echo "<script>window.location = 'index.php?option=giohang'</script>";
	}
?>
<script type="text/javascript">
	function updateData() {	
		confirm("Đã sửa thành công!");
	}
</script>
<div class="item-detail-film">
		<div class="row">
			<div class="col-12 col-md-4 poster-film" >
				<img class="img-film-detail" src="./public/image/film/<?php echo $item_update['image']; ?>" alt="">
				<div class="control">
					<button class="btn btn-danger btn-buy" >
						<p class="price">
							<?php 
								echo number_format($item_update['price'],0,',','.'); 
							?>
						</p>
						<p class="price-sale">
							<?php 
								echo number_format($item_update['price_sale'],0,',','.'); 
							?>								
						</p>						
					</button>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<div class="info-ditail-film">
					<div class="name-detail-film">
						<h3 class="vi-name-film">
							<?php 
								echo $item_update['name']; 
							?></h3>
						<h7 class="en-name-film">
							<?php 
								echo $item_update['name_en'];
							?>
						</h7>
					</div>
					<div class="film-info info-detail-film-scrollbars">
						<p class='movie-detail'>Trạng thái: <span class='movie-dd status'>
						<?php echo $item_update['status'] ?>
						</span></p>
						<p class='movie-detail'>Đạo diễn: <span class='movie-dd dd-director'>
							<?php echo $item_update['director']; ?>
						</span></p>
						<p class='movie-detail'>Quốc gia: <span class='movie-dd dd-country'>
							<?php 
								foreach ($country_film as $coun) {
									echo "<a href='index.php?cat=".$coun['link']."'>".$coun['name'].", "."</a>";
								}
							?>
						</span></p>
						<p class='movie-detail'>Năm: <span class='movie-dd'>
							<?php
							 	echo "<a href='index.php?cat=".$year_film['link']."'>".$year_film['name']."</a>" 
							 ?>
							</span></p>
						<p class='movie-detail'>Ngày khởi chiếu: <span class='movie-dd'><?php echo $item_update['exportdate']; ?></span></p>
						<p class='movie-detail'>Thời lượng: <span class='movie-dd'><?php echo $item_update['longtime'] ?></span></p>
						<p class="movie-detail">Thể loại: <span class="movie-dd dd-country">
							<?php 
								foreach ($cat_film as $cat) {
									echo "<a href='index.php?cat=".$cat['link']."'>".$cat['name'].", "."</a>";
								}		
							?>
							</span></p>
						<p class='movie-detail'>Loại phim: <a class='category' href='#'><?php echo $item_update['type']; ?></a></p>
						<p class='movie-detail'>Công ty SX: <span class='movie-dd'><?php echo $item_update['producer']; ?></span></p>
					</div>
				</div>
				<form action="" method="post">
				<p class="update_booking">Đặt chỗ: <select name="cars" id="cars">
				    <?php 
				    	foreach ($choNgoi as $key => $value) {
				    		if($item_update['seat']==$value){
				    			echo "<option value='".$value."' selected='selected'>".$value."</option>";
				    		}else{
				    			echo "<option value='".$value."'>".$value."</option>";
				    		}
				    		
				    	}
				    ?>	</p>
				
				 </select>

				<div class="input">
	                <label for="txtUser">Số điện thoại: </label>
	                <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone number ..."class="form-control input-text" value="<?php echo $item_update['comment'] ?>">
	            </div>
							
				<div class="input-icons"> 
					<i class="fa fa-pencil icon" aria-hidden="true"></i>
					<input type="submit" class="btn btn-success input-field" name="formUpdate"  value=" Cập nhật" onclick="updateData()">
				</div>
			</form>
			</div>
		</div>
	</div>
	
