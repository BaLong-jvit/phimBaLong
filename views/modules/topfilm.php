<?php 
	$film=loadModel('ConnectDB');
	$listFilm=$film->get_list_hot_film($_REQUEST['strlist'],1);
	$stringHTML="";
	
	foreach ($listFilm as $item) {
		$vi_name=nameCut($item['name']." ",0,30);
		$en_name=nameCut($item['name_en']." ",0,30);
		$country_film=$film->get_country($item['id']); 
		$cat_film=$film->get_category_film($item['id']);
		$year_film=$film->get_year_film($item['id']);
		$stringHTML.="<div class='item-film' style='cursor: pointer;' onclick='window.location=`index.php?id=".$item['id']."`;'>";
		$stringHTML.="	<div class='info-film'>";
		$stringHTML.="		<img class='card-img-top' src='./public/image/film/".$item['image']."'>";
		$stringHTML.="		<div class='full-info overflow-scrollbars'>";
		$stringHTML.="			<p class='movie-dt'>Trạng thái: <span class='movie-dd status'>".$item['status']." </span></p>";
		$stringHTML.="			<p class='movie-dt'>Đạo diễn: <span class='movie-dd dd-director'>".$item['director']."</span></p>";
		$stringHTML.="			<p class='movie-dt'>Quốc gia: <span class='movie-dd dd-country'>";
		foreach ($country_film as $coun) {
			$stringHTML.="<a href='index.php?cat=".$coun['link']."'>".$coun['name'].", "."</a>";
		}
		$stringHTML.="</span></p>";
		$stringHTML.="			<p class='movie-dt'>Năm: <span class='movie-dd'><a href='index.php?cat=".$year_film['link']."'>".$year_film['name']."</a></span></p>";
		$stringHTML.="			<p class='movie-dt'>Ngày khởi chiếu: <span class='movie-dd'>".$item['exportdate']."</span></p>";
		$stringHTML.="			<p class='movie-dt'>Thời lượng: <span class='movie-dd'>".$item['longtime']."</span></p>";
		$stringHTML.="			<p class='movie-dt'>Thể loại: <span class='movie-dd dd-country'>";
		foreach ($cat_film as $cat) {
			$stringHTML.="<a href='index.php?cat=".$cat['link']."'>".$cat['name'].", "."</a>";
		}
		$stringHTML.="</span></p>";
		$stringHTML.="			<p class='movie-dt'>Loại phim: <a class='category' href='#'>".$item['type']."</a></p>";
		$stringHTML.="			<p class='movie-dt'>Công ty SX: <span class='movie-dd'>".$item['producer']."</span></p>";			
		$stringHTML.="		</div>";
		$stringHTML.="	</div>";
		$stringHTML.="	<div class='short-info-film'>";
		$stringHTML.="		<h6 class='name-film'>".$vi_name."</h6>";
		$stringHTML.="		<h7 class='name-en'>".$en_name."</h7>";//
		$stringHTML.="		<h7 class='longtime'>".$item['longtime']."</h7>";
		$stringHTML.="		<div class='d-flex justify-content-between sale'>";
		$stringHTML.="			<div>";
		$stringHTML.="				<h6 class='price-sale'>".number_format($item['price_sale'],0,',','.')."đ"."</h6>";
		$stringHTML.="				<span class='price'>".number_format($item['price'],0,',','.')."</span>";
		$stringHTML.="			</div>	";
		$stringHTML.="			<a class='book-ticket' href='index.php?id=".$item['id']."' >Đặt vé</a>"; 
		$stringHTML.="		</div>";
		$stringHTML.="	</div>";
		$stringHTML.="</div>";
		# code...
	}
?>
<div class="list-film hot-film">
	<div class="title d-flex justify-content-between">
		<label class="tt-list-film" for=""><?php echo nameListHotFilm($_REQUEST['strlist']); ?></label>	
		<a class="more" href="?cat=<?php echo $_REQUEST['strlist'] ?>">Xem tất cả 	&gt;</a>

	</div>			
	<div class="list-items-film">	
		<?php echo $stringHTML ?>
	</div>
</div>	