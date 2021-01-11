<?php 
	$category=loadModel('ConnectDB');
	$list_category=$category->get_list_category('category');
	$list_country=$category->get_list_category('country');
	$list_years=$category->get_list_category('year');
	$htmlStringCategory=""; 
	$htmlStringCountry="";
	$htmlStringYear="";
	foreach ($list_category as $cat) {
		$htmlStringCategory.="<li>";
		$htmlStringCategory.="	<a href='index.php?cat=".$cat['link']."'>".$cat['name']."</a>";
		$htmlStringCategory.="</li>";
	}
	foreach ($list_country as $coun) {
		$htmlStringCountry.="<li>";
		$htmlStringCountry.="	<a href='index.php?cat=".$coun['link']."'>".$coun['name']."</a>";
		$htmlStringCountry.="</li>";
	}
	foreach ($list_years as $year) {
		$htmlStringYear.="<li>";
		$htmlStringYear.="	<a href='index.php?cat=".$year['link']."'>".$year['name']."</a>";
		$htmlStringYear.="</li>";
	}
	// print_r($list_category);echo '<br><br>';
	// print_r($list_country);echo '<br><br>';
	// print_r($list_years);echo '<br><br>';
	// echo json_encode($list_years);
	
?>
<div class="list-category">
	<label for="">Danh sách phim</label>
	<ul>
		<li class="list">
			Thể loại
			<div class='div-second-menu cat-1'>
				<ul class='list-second-menu'>
					<?php echo $htmlStringCategory; ?>
				</ul>
			</div>
		</li>
		<li class="list">
			Quốc gia
			<div class='div-second-menu cat-1'>
				<ul class='list-second-menu'>
					<?php echo $htmlStringCountry; ?>
				</ul>
			</div>
		</li>
		<li class="list">
			Năm
			<div class='div-second-menu cat-1'>
				<ul class='list-second-menu'>
					<?php echo $htmlStringYear; ?>
				</ul>
			</div>
		</li>
	</ul>	
</div>