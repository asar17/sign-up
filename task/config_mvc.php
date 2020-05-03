<?php
class config{
	private $server="localhost";
	private $username="root";
	private $password="";
	private $dbase="sign_mvc";
	public $link;
	public function __construct(){
		$this->link=mysqli_connect($this->server,$this->username,$this->password);
		mysqli_select_db($this->link,$this->dbase);
	}
}
include_once("model_mvc.php");




?>