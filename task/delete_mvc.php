<?php
include_once("control_mvc.php");
$object=new control();
$idPosts=$_GET['idPosts'];
$res=$object->passTOdelete("posts","id=$idPosts");
		if($res==true){
			echo "<script src='main.js'></script>";
			header("Refresh:0;url=profile_mvc.php");
		}







?>