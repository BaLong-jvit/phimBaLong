<?php /**
 * 
 */
class Cart 
{
    private $id;
    private $name;
    private $id_film;
    private $seat;
    private $price;
    private $sale_price;
    private $is_checked;
	function __construct($id,$name,$id_film,$seat,$price,$sale_price, $is_checked)
	{
		$this->id=$id;
		$this->name=$name;
		$this->id_film=$id_film;
		$this->seat=$seat;
		$this->price=$price;
		$this->sale_price=$sale_price;
		$this->is_checked=$is_checked;
	}
	function set_id($id){
		$this->id=$id;
	}
	function get_id(){
		return $this->id;
	}
	function set_name($name){
		$this->name = $name;
	}
	function get_name(){
		return $this->name;
	}
	function set_id_film($id_film){
		$this->id_film=$id_film;
	}
	function get_id_film(){
		return $this->id_film;
	}
	function set_seat($seat){
		$this->seat=$seat;
	}
	function get_seat(){
		return $this->seat;
	}
	function set_price($price){
		$this->price=$price;
	}
	function get_price(){
		return $this->price;
	}
	function set_sale_price($sale_price){
		$this->sale_price=$sale_price;
	}
	function get_sale_price(){
		return $this->sale_price;
	}
	function set_is_checked($is_checked){
		$this->is_checked=$is_checked;
	}
	function get_is_checked(){
		return $this->is_checked;
	}
} ?>