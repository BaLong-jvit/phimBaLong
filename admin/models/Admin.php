<?php 
/**
  * 
  */
 class AdminAccount
 {
 	private $id;
 	private $adminUser;
 	private $adminPass;
 	private $displayName;
 	private $parentId;
 	private $status;
 	private $trash;
 	function __construct($id,$adminUser	,$adminPass	,$displayName,$parentId,$status,$trash)
 	{
 		$this->id = $id;
 		$this->adminUser=$adminUser;
 		$this->adminPass=$adminPass;
 		$this->displayName=$displayName;
 		$this->parentId=$parentId;
 		$this->status=$status;
 		$this->trash=$trash;
 	}
 	function set_id($id){
 		$this->id=$id;
 	}
 	function get_id(){
 		return $this->id;
 	}
 	function set_adminUser($adminUser){
 		$this->adminUser=$adminUser;
 	}
 	function get_adminUser(){
 		return $this->adminUser;
 	}
 	function set_adminPass($adminPass){
 		$this->adminPass=$adminPass;
 	}
 	function get_adminPass(){
 		return $this->adminPass;
 	}
 	function set_displayName($displayName){
 		$this->displayName=$displayName;
 	}
 	function get_displayName(){
 		return $this->displayName;
 	}
 	function set_parentId($parentId){
 		$this->parentId=$parentId;
 	}
 	function get_parentId(){
 		return $this->parentId;
 	}
 	function set_status($status){
 		$this->status=$status; 		
 	}
 	function get_status(){
 		return $this->status;
 	}
 	function set_trash($trash){
 		$this->trash=$trash;
 	}
 	function get_trash(){
 		return $this->trash;
 	}
 } ?>