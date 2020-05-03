<?php
include_once("control_mvc.php");
$object=new control();
	if(isset($_POST['clickPost'])){
		$post=$_POST['post'];
		$id=$_POST['hidden'];
		$inputs=array("post"=>$post);
		list($msg,$bool)=$object->validData($inputs);
	if($bool==false){
		echo $msg;
	}
	elseif($bool==true&&$msg==count($inputs)){
		
		$res=$object->passTOinsert("posts" ,"userID,post,date" ," $id,'$post',NOW()");
		if($res==true){
			
			echo "<script src='main.js'></script>";
			header("Refresh:0;url=profile_mvc.php");


		}
		}
	}





?>