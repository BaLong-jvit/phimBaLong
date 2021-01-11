<?php 
	class Database extends WebConfig
	{
		var $connect;
		function __construct()
		{
			$this->connect = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			mysqli_set_charset($this->connect,'utf8');

		}
		function tableName($name){
			return $this->tb.$name;
		}
		function queryData($sql){
			$a=array();
			$result=mysqli_query($this->connect,$sql);
			if ($result == null) {
				return null;
			}else{
				while ($row=mysqli_fetch_assoc($result)) {
					$a[]=$row;
				}
				return $a;
			}
		}
		function queryOneData($query_sql){
			$a=array();
			$result=mysqli_query($this->connect,$query_sql);
			$row=mysqli_fetch_assoc($result);
			return $row;
		}
		function queryNoResult($sql){
			mysqli_query($this->connect,$sql);
		}
	}
?>