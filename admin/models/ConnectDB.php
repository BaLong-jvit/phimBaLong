<?php 
/**
 * 
 */
class ConnectDB extends Database
{
	
	function __construct()
	{
		parent::__construct();
	}

// account

	function get_account($user, $pass){
		$sql="SELECT * FROM db_account WHERE UserName = '$user' AND Password = '$pass' AND zone = 0";
		return $this->queryOneData($sql);
	}
	function checkAccount($user){
		$sql_check="SELECT UserName FROM db_account WHERE UserName = '$user' AND zone = 0";
		return $this->queryOneData($sql_check);
	}
	function insertAccount($rg_disname,$rg_user,$rg_pass){
		$sql="INSERT INTO db_account (DisplayName, UserName, Password) VALUES ('$rg_disname','$rg_user','$rg_pass')";
		$this->queryNoResult($sql);
	}
// category
	function get_list_category($tableName){
		$this->table=$this->tableName($tableName);
		$query_sql="SELECT * FROM $this->table WHERE status='1' AND trash='1'";
		return $this->queryData($query_sql);
	}
	function get_one_category($tb_name,$link){
		$this->table=$this->tableName($tb_name);
		$query_sql="SELECT * FROM $this->table WHERE link= '$link' AND status='1' AND trash='1'";
		return $this->queryOneData($query_sql);
	}
	function get_list_film($tb_name,$cat,$page){
		$offset=($page-1)*8;
		$sql="";
		$this->table=$this->tableName($tb_name);
		if($tb_name=='year'){
			$sql.="SELECT db_film.* FROM db_film INNER JOIN $this->table ON db_film.year = $this->table.id WHERE $this->table.link = '$cat' AND db_film.trash = 1 ORDER BY db_film.id DESC LIMIT 8 OFFSET $offset";
		}elseif ($tb_name=='category') {
			$sql.="SELECT db_film.* FROM db_film INNER JOIN db_rela_cat_film ON db_film.id = db_rela_cat_film.id_film INNER JOIN $this->table ON $this->table.id = db_rela_cat_film.id_cat WHERE $this->table.link = '$cat' AND db_film.trash = 1 ORDER BY db_film.id DESC LIMIT 8 OFFSET $offset";
		}elseif ($tb_name == 'country') {
			$sql.="SELECT db_film.* FROM db_film INNER JOIN db_rela_country_film ON db_film.id = db_rela_country_film.id_film INNER JOIN $this->table ON $this->table.id = db_rela_country_film.id_country WHERE $this->table.link = '$cat' AND db_film.trash = 1 ORDER BY db_film.id DESC LIMIT 8 OFFSET $offset";
		}
		return $this->queryData($sql);
	}

	// film 
	function get_one_film($id){
		$sql="SELECT * FROM db_film WHERE trash=1 AND id = $id";
	 	return $this->queryOneData($sql);
	}

	// list hot film
	function get_list_hot_film($getFilm,$page){
 		$sql="";
 		$offset=($page-1)*8;
 		switch ($getFilm) {
 			case 'phim-de-cu':
 				$this->table=$this->tableName('film');
 				$sql.="SELECT * FROM $this->table WHERE trash=1 ORDER BY id DESC LIMIT 8 OFFSET $offset";	 			
 				break;
 			case 'phim-chieu-rap-2020':
 				$this->table=$this->tableName('film');
 				$sql.="SELECT * FROM $this->table WHERE trash=1 AND year='1' AND type LIKE 'Phim lẻ' ORDER BY id DESC LIMIT 8 OFFSET $offset";
 				# code...
 				break; 
 			case 'phim-le-moi-cap-nhat':
 				$this->table=$this->tableName('film');
 				$sql.="SELECT * FROM $this->table WHERE trash=1 AND type LIKE 'Phim lẻ' ORDER BY id DESC LIMIT 8 OFFSET $offset";
 				# code...
 				break;
 			case 'phim-bo-moi-cap-nhat':
 				$this->table=$this->tableName('film');
 				$sql.="SELECT * FROM $this->table WHERE trash=1 AND type LIKE 'Phim Bộ' ORDER BY id DESC LIMIT 8 OFFSET $offset";
 				# code...
 				break;
 			case 'phim-hoat-hinh-moi-cap-nhat':
 				$sql.="SELECT * FROM db_rela_cat_film INNER JOIN db_film ON db_rela_cat_film.id_film= db_film.id WHERE db_rela_cat_film.id_cat = 19 AND db_film.trash = 1 ORDER BY db_film.id DESC LIMIT 8 OFFSET $offset";
 				# code...
 				break;
 			default:
 				
 				break;
 		}
 		return $this->queryData($sql);
 	}
 	function get_country($id_film){
 		$sql = "SELECT * FROM db_rela_country_film INNER JOIN db_country ON db_rela_country_film.id_country = db_country.id WHERE db_rela_country_film.id_film = $id_film";
 		return $this->queryData($sql);
 	}
 	function get_category_film($id_film){
 		$sql = "SELECT * FROM db_rela_cat_film INNER JOIN db_category ON db_rela_cat_film.id_cat = db_category.id WHERE db_rela_cat_film.id_film = $id_film";
 		return $this->queryData($sql);
 	}
 	function get_year_film($id_film){
 		$sql ="SELECT db_year.name,db_year.link FROM db_year INNER JOIN db_film ON db_film.year = db_year.id WHERE db_film.id = $id_film";
 		return $this->queryOneData($sql);
 	}
 	// list cat new 
 	function get_cat_news($parent_id){
		$query_sql="SELECT * FROM db_menu WHERE parent_id = $parent_id AND is_news=0 AND trash = 1 AND status =1";
		return  $this->queryData($query_sql);
	}
	function get_total_film($cat){
		$sql="";
		switch ($cat) {
			case 'phim-de-cu':
				$sql="SELECT COUNT(*) FROM db_film WHERE trash=1 ORDER BY id DESC";
				return $this->queryOneData($sql)['COUNT(*)'];
				break;
			case 'phim-chieu-rap-2020':
				$sql="SELECT COUNT(*) FROM db_film WHERE trash=1 AND year='1' AND type LIKE 'Phim lẻ' ORDER BY id DESC";
				return $this->queryOneData($sql)['COUNT(*)'];
				break;
			case 'phim-le-moi-cap-nhat':
				$sql="SELECT COUNT(*) FROM db_film WHERE trash=1 AND type LIKE 'Phim lẻ' ORDER BY id DESC";
				return $this->queryOneData($sql)['COUNT(*)'];
				break;
			case 'phim-bo-moi-cap-nhat':
				$sql = "SELECT COUNT(*) FROM db_film WHERE trash=1 AND type LIKE 'Phim Bộ' ORDER BY id DESC";
				return $this->queryOneData($sql)['COUNT(*)'];
				break;
			case 'phim-hoat-hinh-moi-cap-nhat':
				$sql = "SELECT COUNT(*) FROM db_rela_cat_film INNER JOIN db_film ON db_rela_cat_film.id_film= db_film.id WHERE db_rela_cat_film.id_cat = 19 AND db_film.trash = 1 ORDER BY db_film.id DESC";
				return $this->queryOneData($sql)['COUNT(*)'];
				break;
			default:
				$total=$this->queryOneData("SELECT COUNT(*) FROM db_film INNER JOIN db_rela_cat_film ON db_film.id = db_rela_cat_film.id_film INNER JOIN db_category ON db_category.id = db_rela_cat_film.id_cat WHERE db_category.link = '$cat' AND db_film.trash = 1 ORDER BY db_film.id DESC")['COUNT(*)'];
				if ($total==0) {
					$total=$this->queryOneData("SELECT COUNT(*) FROM db_film INNER JOIN db_rela_country_film ON db_film.id = db_rela_country_film.id_film INNER JOIN db_country ON db_country.id = db_rela_country_film.id_country WHERE db_country.link = '$cat' AND db_film.trash = 1 ORDER BY db_film.id DESC")['COUNT(*)'];
					if ($total==0) {
						$total=$this->queryOneData("SELECT COUNT(*) FROM db_film INNER JOIN db_year ON db_film.year = db_year.id WHERE db_year.link = '$cat' AND db_film.trash = 1 ORDER BY db_film.id DESC")['COUNT(*)'];
					}
				}
				return $total;
				break;
		}
	}

	// list new
	function get_list_news($parent_id,$page){
		$offset=($page-1)*20;
 		$query_sql="";
 		$query_sql.=($parent_id == 0)?"SELECT * FROM db_menu WHERE is_news = 1 AND trash =1 AND status =1 ORDER BY id DESC LIMIT 20 OFFSET $offset":"SELECT * FROM db_menu WHERE parent_id = $parent_id AND is_news = 1 AND trash =1 AND status =1 ORDER BY id DESC LIMIT 20 OFFSET $offset";
 		return $this->queryData($query_sql);
 	}
 	function get_total_news($parent_id){
 		$query_sql="";
 		$query_sql.=($parent_id == 0)?"SELECT COUNT(*) FROM db_menu WHERE is_news = 1 AND trash =1 AND status =1 ORDER BY id DESC":"SELECT COUNT(*) FROM db_menu WHERE parent_id = $parent_id AND is_news = 1 AND trash =1 AND status =1 ORDER BY id DESC";
 		return $this->queryOneData($query_sql)['COUNT(*)'];
 	}
 	// page 

 	function get_content_page($pageId){
		$query_sql="SELECT * FROM db_menu WHERE id = '$pageId' AND trash = 1 LIMIT 1";
		return $this->queryOneData($query_sql);
	}
	// gio hang
	function get_array_cart($id){
		$sql="SELECT * from db_film INNER JOIN db_giohang ON db_film.id=db_giohang.id_film WHERE db_giohang.id_acc = $id ORDER BY db_giohang.id asc";
		return $this->queryData($sql);
	}
	function deleteCart($id){
		$sql="DELETE FROM db_giohang WHERE ID = $id";
		return $this->queryNoResult($sql);
	}
	function get_cart_update($id_update){
		$sql="SELECT * from db_film INNER JOIN db_giohang ON db_film.id=db_giohang.id_film WHERE db_giohang.id = $id_update ORDER BY db_giohang.id asc";
		return $this->queryOneData($sql);
	}
}
?>