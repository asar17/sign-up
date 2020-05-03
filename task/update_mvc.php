<?php
include_once("control_mvc.php");
include_once("update_mvc.html");
$object=new control();
if(isset($_POST['clickUpdate'])){
	$textUpdate=$_POST['textUpdate'];
	$idPosts=$_POST['hidden'];
	$inputs=array("post"=>$textUpdate);
	list($msg,$bool)=$object->validData($inputs);
	if($bool==false){
		echo $msg;
	}
	elseif($bool==true&&$msg==count($inputs)){
		$res=$object->passTOupdate("posts","post='$textUpdate'","id=$idPosts");
		if($res==true){
			echo "<script src='main.js'></script>";
			header("Refresh:0;url=profile_mvc.php");		
		}
		
		
	}
	
	
	
	
	
	
	
	
	
	
}











?>