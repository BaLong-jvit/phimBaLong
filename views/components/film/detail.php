<?php 
	$film=loadModel('ConnectDB');
	// $film_dt=loadModel('ListHotFilm');
	$detail_film=$film->get_one_film($_REQUEST['id']);

	$country_film=$film->get_country($_REQUEST['id']); 
	$cat_film=$film->get_category_film($_REQUEST['id']);
	$year_film=$film->get_year_film($_REQUEST['id']);

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

	//Stop Video
	
?>
<div class="wapper-detail-film">
	<div class="item-detail-film">
		<div class="row">
			<div class="col-12 col-md-6 poster-film" >
				<img class="img-film-detail" src="./public/image/film/<?php echo $detail_film['image']; ?>" alt="">
				<div class="control">
					<button type="button" class="btn btn-success btn-trailer" data-toggle="modal" data-target="#myModalTrailer">Xem Trailer</button>
					<button type="button" class="btn btn-danger btn-buy" data-toggle="modal" data-target="#myModalBooking">
						<p class="price">
							<?php 
								echo number_format($detail_film['price'],0,',','.'); 
							?>
						</p>
						<p class="price-sale">
							<?php 
								echo number_format($detail_film['price_sale'],0,',','.'); 
							?>								
						</p>						
					</button>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="info-ditail-film">
					<div class="name-detail-film">
						<h3 class="vi-name-film">
							<?php 
								echo $detail_film['name']; 
							?></h3>
						<h7 class="en-name-film">
							<?php 
								echo $detail_film['name_en'];
							?>
						</h7>
					</div>
					<div class="film-info info-detail-film-scrollbars">
						<p class='movie-detail'>Trạng thái: <span class='movie-dd status'>
						<?php echo $detail_film['status'] ?>
						</span></p>
						<p class='movie-detail'>Đạo diễn: <span class='movie-dd dd-director'>
							<?php echo $detail_film['director']; ?>
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
						<p class='movie-detail'>Ngày khởi chiếu: <span class='movie-dd'><?php echo $detail_film['exportdate']; ?></span></p>
						<p class='movie-detail'>Thời lượng: <span class='movie-dd'><?php echo $detail_film['longtime'] ?></span></p>
						<p class="movie-detail">Thể loại: <span class="movie-dd dd-country">
							<?php 
								foreach ($cat_film as $cat) {
									echo "<a href='index.php?cat=".$cat['link']."'>".$cat['name'].", "."</a>";
								}		
							?>
							</span></p>
						<p class='movie-detail'>Loại phim: <a class='category' href='#'><?php echo $detail_film['type']; ?></a></p>
						<p class='movie-detail'>Công ty SX: <span class='movie-dd'><?php echo $detail_film['producer']; ?></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-detail-film">
		<label class="tt-content" for="">NỘI DUNG PHIM</label>
		<div class="short-content-film">
			<p class="content-film">
				<?php echo $detail_film['content'] ?>
			</p>
		</div>
	</div>
	<div class="comment">
		<label class="tt-comment" for="">Bình luận phim</label>
		<div class="comment-film">
			<div class="write-comment">
				<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
				<div class="textarea">
					<textarea name="" id="" class="input-comment" placeholder="Nhận xét về phim..."></textarea>
				</div>
				<button type="button" class="btn btn-primary btn-send-comment">Bình luận</button>

			</div>
			<ul>
				<li class="item-comment-film">
					<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
					<div>
						<a class="name-ac" href="">Hằng Hằng</a>
						<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
						<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
						<ul>
							<li class="item-comment-film">
								<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
								<div>
									<a class="name-ac" href="">Hằng Hằng</a>
									<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
									<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
								</div>
							</li>
							<li class="item-comment-film">
								<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
								<div>
									<a class="name-ac" href="">Hằng Hằng</a>
									<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
									<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
								</div>
							</li>
							<li class="item-comment-film">
								<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
								<div>
									<a class="name-ac" href="">Hằng Hằng</a>
									<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
									<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
								</div>
							</li>
							<li class="item-comment-film">
								<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
								<div>
									<a class="name-ac" href="">Hằng Hằng</a>
									<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
									<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li class="item-comment-film">
					<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
					<div>
						<a class="name-ac" href="">Hằng Hằng</a>
						<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
						<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
					</div>
				</li>
				<li class="item-comment-film">
					<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
					<div>
						<a class="name-ac" href="">Hằng Hằng</a>
						<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
						<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
						<ul>
							<li class="item-comment-film">
								<img class="img-acc-comment" src="./public/image/account/default.png" alt="">
								<div>
									<a class="name-ac" href="">Hằng Hằng</a>
									<p class="comment-content">Chủ nhật có phim ko mọi người!</p>
									<span><a href="">Thích 	&middot;</a><a href=""> Phản hồi 	&middot;</a><span> 15 giờ</span></span>
								</div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="modal fade" id="myModalTrailer">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Trailer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        	<iframe width="100%" height="315" src="<?php echo $detail_film['trailer'] ?>?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" id="btn_like" class="btn btn-secondary" value="Like" data-dismiss="modal">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
 </div>
 <form action="" method="post">
	 <div class="modal fade" id="myModalBooking">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Đặt vé</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <!-- Modal body -->
	        <div class="modal-body">
	 			<div class="row">
	 				<div class="col-4">
	 					<img src="./public/image/film/<?php echo $detail_film['image']; ?>" alt="" class="img_film_booking">
	 				</div>
	 				<div class="col-8">
	 					<h3 class="vi-name-film fimlname_booking">
								<?php 
									echo $detail_film['name']; 
								?></h3>
						<h7 class="en-name-film fiml_booking">
								<?php 
									echo $detail_film['name_en'];
								?>
						</h7>
						<p class="movie-detail">Thể loại: <span class="movie-dd dd-country">
								<?php 
									foreach ($cat_film as $cat) {
										echo "<span>".$cat['name'].", "."</span>";
									}		
								?>
								</span></p>
						<p class="movie-detail">Đặt chỗ: <select name="cars" id="cars">
						    <?php 
						    	foreach ($choNgoi as $key => $value) {
						    		echo "<option value='".$value."'>".$value."</option>";
						    	}
						    ?>
						</select></p>
						
						<p class="price">
								<?php 
									echo number_format($detail_film['price'],0,',','.'); 
								?>
							</p>
							<p class="price-sale">
								<?php 
									echo number_format($detail_film['price_sale'],0,',','.'); 
								?>								
							</p>	
							<?php if (!isset($_COOKIE['dangnhap'])): ?>
								<div class="input">
					                <label for="txtUser">Số điện thoại: </label>
					                <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone number ..."class="form-control input-text">
					            </div>
							<?php endif ?>
	 				</div>
	 			</div>
	        </div>
	        <!-- Modal footer -->
	        <div class="modal-footer">
	            <input type="submit" id="btn_book" name="btn_book" class="btn btn-danger" value="Đặt">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	 </div>

 </form>
 <?php 
 	if (array_key_exists('btn_book',$_POST)) {
 		$idAcc='null';
 		$pNumber=null;
 		$sit=$_REQUEST['cars'];
 		$idFilm=$detail_film['id'];
 		if (isset($_COOKIE['dangnhap'])) {
 			$account=unserialize($_COOKIE['dangnhap']);
 			$idAcc=$account['ID']; 			
 		}else{
 			$pNumber=$_REQUEST['phoneNumber'];
 		}
 		$sql= "INSERT INTO db_giohang( id_acc, id_film, seat, comment) VALUES ($idAcc, $idFilm, '$sit', '$pNumber')";
 		$film->queryNoResult($sql);

 	}
?>