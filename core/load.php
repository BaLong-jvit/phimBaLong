<?php 
function loadModel($name)
{	
	$name = ucfirst(strtolower($name));
	$pathModel='models/'.$name.'.php';
	if(file_exists($pathModel)){
		include_once($pathModel);
		$modelclass= new $name;
		return $modelclass;
	}
	else{
		return null;
	}
} 
function loadAccount($name)
{	
	$name = ucfirst(strtolower($name));
	$pathModel='../../models/'.$name.'.php';
	if(file_exists($pathModel)){
		include_once($pathModel);
		$modelclass= new $name;
		return $modelclass;
	}
	else{
		return null;
	}
} 
function loadModule($name){
	$pathModule = 'views/modules/'.$name.'.php';
	if(file_exists($pathModule)){
		include($pathModule);
	}
	else{
		echo "this modules cann't finded";
	}
}


function loadTemplate($name){
	$pathTemplate = 'views/template/'.$name.'.php';
	if(file_exists($pathTemplate)){
		include($pathTemplate);
	}
	else{
		echo "this teamplate cann't finded";
	}
}
function loadComponent(){
	$pathComponent = 'views/components/';
	if(isset($_REQUEST['option'])){
		$pathComponent.=$_REQUEST['option'].'/';
		if (isset($_REQUEST['id'])) {
			$pathComponent.='detail.php';
		}
		else{
			if (isset($_REQUEST['cat'])) {
				$pathComponent.='category.php';
			}
			else{
				if (isset($_REQUEST['actcart'])) {
					$pathComponent.=($_REQUEST['actcart']=='delete')?'delete.php':'update.php';
				}else{
					$pathComponent.='index.php';
				}
				
			}
		}
	}else{
		$pathComponent.='home/index.php';
	}
	if (file_exists($pathComponent)) {
		include_once($pathComponent);
	}else {
		echo $pathComponent." Không tồn tại";
	}
}
function loadComponentNews(){
	$pathComponent = 'views/components/';
	if(isset($_REQUEST['option'])){
		$pathComponent.=$_REQUEST['option'].'/';
		if (isset($_REQUEST['local'])) {
			$pathComponent.=$_REQUEST['local'].'/';
			if(isset($_REQUEST['list'])){
				$pathComponent.='listNews.php';				
			}
		}elseif(isset($_REQUEST['id-news'])){
			$pathComponent.='detail.php';
		}
		else{
			$pathComponent.='listAllNews.php';
		}
		
	}else{
		$pathComponent.='home/index.php';
	}
	if (file_exists($pathComponent)) {
		include_once($pathComponent);
	}else {
		echo $pathComponent." Không tồn tại";
	}
}
function loadComponentFilm(){
	$pathComponent='views/components/film/';
	if(isset($_REQUEST['cat'])){
		$pathComponent.='category.php';
	}elseif(isset($_REQUEST['id'])){
		$pathComponent.='detail.php';
	}else{
		$pathComponent.='index.php';
	}
	if (file_exists($pathComponent)) {
		include_once($pathComponent);
	}else {
		echo $pathComponent." Không tồn tại";
	}
}
function loadClass($name){
	$name=ucfirst(strtolower($name));
	$pathClass='core/'.$name.'.php';
	if (file_exists($pathClass)) {
		# code...
		include_once($pathClass);
		$nameClass=new $name;
		return $nameClass;
	}else{
		return null;
	}
}
function loadlist($strList){
	$_REQUEST['strlist']=$strList;
	loadModule('topfilm'); 
}
function nameCut($str, $start, $end){
	if(strlen($str) <= $end){
		return $str;
	}else{
		if($str[$end]=="  "){
			return substr($str, $start,$end)."...";
		}else {
			while ($str[$end]!=" ") {
				$end++;
			}
			return substr($str, $start,$end)."...";
		}
	}
}
function nameListHotFilm($str){
	switch ($str) {
		case 'phim-de-cu':
			return 'Phim đề cử';
			break;
 		case 'phim-chieu-rap-2020':
			return 'Phim chiếu rạp 2020';
			break;
		case 'phim-le-moi-cap-nhat':
			return 'Phim lẻ mới cập nhật';
			break;
 		case 'phim-bo-moi-cap-nhat':
			return 'Phim bộ mới cập nhật';
			break;
 		case 'phim-hoat-hinh-moi-cap-nhat':
			return 'Phim hoạt hình mới cập nhật';
			break;
		default:
			return null;
			break;
	}
}
function btn_phanTrang($page, $total_page, $cat){
	$btn_pageHTML="";
	if ($total_page==0) {
		$total_page++;
	}
	if ($total_page<2) {
		$btn_pageHTML.="<li class='btn_page ''>
			<a href='?cat=".$cat."&page=1' class='page_button'>1</a>
		</li>";
	}else{
		if ($page==1) {
			for ($i=0; $i < $total_page; $i++) { 
			$btn_pageHTML.="<li class='btn_page ''>
				<a href='?cat=".$cat."&page=".($i+1)."' class='page_button";
				if(($i+1)==$page){
					$btn_pageHTML.=" activi_page";
				}
				$btn_pageHTML.="'>".($i+1)."</a></li>";
			}
			$btn_pageHTML.="<li class='btn_page next'>
				<a href='?cat=".$cat."&page=".($page+1)."' class='next_button'>Next</a>
			</li>";
		}elseif ($page==$total_page) {
			$btn_pageHTML.="<li class='btn_page next'>
					<a href='?cat=".$cat."&page=".($page-1)."' class='pre_button'>Previous</a>
				</li>";
			for ($i=0; $i < $total_page; $i++) { 
				$btn_pageHTML.="<li class='btn_page ''>
				<a href='?cat=".$cat."&page=".($i+1)."' class='page_button";
				if(($i+1)==$page){
					$btn_pageHTML.=" activi_page";
				}
				$btn_pageHTML.="'>".($i+1)."</a></li>";
			}
		}else{
			$btn_pageHTML.="<li class='btn_page next'>
					<a href='?cat=".$cat."&page=".($page-1)."' class='pre_button'>Previous</a>
				</li>";
			for ($i=0; $i < $total_page; $i++) { 
				$btn_pageHTML.="<li class='btn_page ''>
				<a href='?cat=".$cat."&page=".($i+1)."' class='page_button";
				if(($i+1)==$page){
					$btn_pageHTML.=" activi_page";
				}
				$btn_pageHTML.="'>".($i+1)."</a></li>";
			}
			$btn_pageHTML.="<li class='btn_page next'>
					<a href='?cat=".$cat."&page=".($page+1)."' class='next_button'>Next</a>
				</li>";
		}
	}
	return $btn_pageHTML;
}

?>