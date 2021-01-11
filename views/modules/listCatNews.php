<?php 
	$news=loadModel('ConnectDB');
	$listNews = $news->get_cat_news(2);
	$strHTML="";
	foreach ($listNews as $itemPrNews) {
		$listSecondNews=$news->get_cat_news($itemPrNews['id']);
		if(count($listSecondNews)){
			$strHTML.="<li class='list'>";
			$strHTML.= 	$itemPrNews['title'];
			$strHTML.="	<div class='div-second-news'>";
			$strHTML.="		<ul class='list-second-news'>";
						foreach ($listSecondNews as $itemPrNews2) {
							$strHTML.="<li>";
							$strHTML.="	<a href='index.php?option=tintuc&local=".$itemPrNews['id']."&list=".$itemPrNews2['id']."'>".$itemPrNews2['title']."</a>";
							$strHTML.="</li>";
						}
			$strHTML.="		</ul>";
			$strHTML.="	</div>";
			$strHTML.="</li>";
		}
		else{
			$strHTML.="<li class='list'>";
			$strHTML.="	<a href='index.php?option=tintuc&local=".$itemPrNews['id']."&list=".$itemPrNews2['id']."'>".$itemPrNews2['title']."</a>";
			$strHTML.="</li>";
		}
	}
?>
<div class="list-category">
	<label for="">Tin Tức</label>
	<ul>
		<?php echo $strHTML; ?>
	</ul>	
</div>