<?php 
	$cat=$_REQUEST['cat'];
	$page=null;
	$list_film = null;
	$name_list=null;
	$stringHTML="";
	$total_film=0;
	if(isset($_REQUEST['page'])){
		$page=$_REQUEST['page'];
	}else{
		$page=1;
	}
	// lay ten
	$name_cat=loadModel('ConnectDB');
	$film=loadModel('ConnectDB');
	// load list(varname)
	
	// load name
	
	switch ($cat) {
		case 'phim-de-cu':
			$name_list= 'Phim đề cử';
			$list_film=$film->get_list_hot_film($cat,$page);
			break;
 		case 'phim-chieu-rap-2020':
			$list_film=$film->get_list_hot_film($cat,$page);
			$name_list= 'Phim chiếu rạp 2020';
			break;
		case 'phim-le-moi-cap-nhat':
			$list_film=$film->get_list_hot_film($cat,$page);
			$name_list= 'Phim lẻ mới cập nhật';
			break;
 		case 'phim-bo-moi-cap-nhat':
			$list_film=$film->get_list_hot_film($cat,$page);
			$name_list= 'Phim bộ mới cập nhật';
			break;
 		case 'phim-hoat-hinh-moi-cap-nhat':
			$list_film=$film->get_list_hot_film($cat,$page);
			$name_list= 'Phim hoạt hình mới cập nhật';
			break;
		default:
			$name_of_cat=$name_cat->get_one_category('category',$cat);
			$listCat=$name_cat -> get_list_film('category',$cat, $page);
			if ($name_of_cat==null) {
				$name_of_count=$name_cat->get_one_category('country',$cat);
				$listCoun = $name_cat -> get_list_film('country',$cat,$page);
				if ($name_of_count==null) {
					$name_of_year=$name_cat->get_one_category('year',$cat);
					$name_list=$name_of_year['name'];
					$listYear=$name_cat -> get_list_film('year',$cat,$page);
					$list_film = $listYear;
				}else{
					$name_list=$name_of_count['name'];
					$list_film = $listCoun;
				}
			}else{
				$name_list=$name_of_cat['name'];
				$list_film = $listCat;
			}
			break;
	}
	$total_film=$film->get_total_film($cat);
	$total_page=ceil($total_film/8);
	$btn_pageHTML=btn_phanTrang($page, $total_page, $cat);
	

	if($list_film==null){
		$stringHTML="<div class='alert alert-warning' role='alert'>
  						Danh sách phim đang cập nhật
					</div>";
	}else{	
		foreach ($list_film as $item) {
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
			$stringHTML.="			<p class='movie-dt'>Loại phim: <a class='category' href='phim-bo/' title='Phim bộ mới'>".$item['type']."</a></p>";
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
	}
?>
<div class="list-film hot-film">
	<div class="title d-flex justify-content-between">
		<label class="tt-list-film" for=""><?php echo $name_list; ?></label>	
	</div>			

	<div class="list-items-film">	
		<?php echo $stringHTML ?>
	</div>

	<ul class="btn_pageHTML">
		<?php echo $btn_pageHTML; ?>
		<!-- <li class="btn_page previous">Previous</li> -->
		
		<!-- <li class="btn_page next">Next</li> -->


	</ul>
</div>