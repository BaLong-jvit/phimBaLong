<?php 
	$page=(isset($_REQUEST['page']))?$_REQUEST['page']:1;
	$parent_id=(isset($_REQUEST['list']))?$_REQUEST['list']:0;
	$option = $_REQUEST['option'];
	$listNew = loadModel('ConnectDB');
	$list=$listNew->get_list_news($parent_id,$page);
	$total_news= $listNew->get_total_news($parent_id);
	$total_page=ceil($total_news/20);
	$btn_pageHTML="";
	if ($total_page==0) {
		$total_page++;
	}
	if ($total_page<2) {
		$btn_pageHTML.="<li class='btn_page ''>
			<a href='?option=".$option."&page=1' class='page_button'>1</a>
		</li>";
	}else{
		if ($page==1) {
			for ($i=0; $i < $total_page; $i++) { 
			$btn_pageHTML.="<li class='btn_page ''>
				<a href='?option=".$option."&page=".($i+1)."' class='page_button";
				if(($i+1)==$page){
					$btn_pageHTML.=" activi_page";
				}
				$btn_pageHTML.="'>".($i+1)."</a></li>";
			}
			$btn_pageHTML.="<li class='btn_page next'>
				<a href='?option=".$option."&page=".($page+1)."' class='next_button'>Next</a>
			</li>";
		}elseif ($page==$total_page) {
			$btn_pageHTML.="<li class='btn_page next'>
					<a href='?option=".$option."&page=".($page-1)."' class='pre_button'>Previous</a>
				</li>";
			for ($i=0; $i < $total_page; $i++) { 
				$btn_pageHTML.="<li class='btn_page ''>
				<a href='?option=".$option."&page=".($i+1)."' class='page_button";
				if(($i+1)==$page){
					$btn_pageHTML.=" activi_page";
				}
				$btn_pageHTML.="'>".($i+1)."</a></li>";
			}
		}else{
			$btn_pageHTML.="<li class='btn_page next'>
					<a href='?option=".$option."&page=".($page-1)."' class='pre_button'>Previous</a>
				</li>";
			for ($i=0; $i < $total_page; $i++) { 
				$btn_pageHTML.="<li class='btn_page ''>
				<a href='?option=".$option."&page=".($i+1)."' class='page_button";
				if(($i+1)==$page){
					$btn_pageHTML.=" activi_page";
				}
				$btn_pageHTML.="'>".($i+1)."</a></li>";
			}
			$btn_pageHTML.="<li class='btn_page next'>
					<a href='?option=".$option."&page=".($page+1)."' class='next_button'>Next</a>
				</li>";
		}
	}
	
	$str_list_short_news="";
	foreach ($list as $item_short_news) {
		$str_list_short_news.="<li class='item-short-news'>";
		$str_list_short_news.="	<a class='tt-news' href='index.php?option=tintuc&id-news=".$item_short_news['id']."'>".nameCut($item_short_news['title']." ",0,100)."</a>";
		$str_list_short_news.="	<div class='row'>";
		$str_list_short_news.="		<div class='col-4 div-img-news'>";
		$str_list_short_news.="			<img class='img-news' src='./public/image/news/".$item_short_news['img']."' alt=''>";
		$str_list_short_news.="		</div>";
		$str_list_short_news.="		<div class='col-8 news'>";
		$str_list_short_news.="			<span class='short-info'>".nameCut($item_short_news['short_content']." ",0,120)."</span>";
		$str_list_short_news.="			<a href='?option=tintuc&id-news=".$item_short_news['id']."' class='detail-news'>Xem chi tiết ".$item_short_news['id']." &gt;</a>";
		$str_list_short_news.="		</div>";
		$str_list_short_news.="	</div>";
		$str_list_short_news.="</li>";
	}
?>
<div class="wapper-list-news">
	<label>Tin tức tổng hợp</label>
	<ul class="list-news">
		<?php echo $str_list_short_news; ?>
	</ul>
	<ul class="btn_pageHTML">
	<?php echo $btn_pageHTML; ?>
</ul>
</div>