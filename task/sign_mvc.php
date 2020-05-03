<?php
session_start();
include_once("control_mvc.php");


$object=new control();
if(isset($_POST['click'])){

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$_SESSION['userUpdate']=$user;
			
			










						

	
	$inputs=array("user"=>$user,"pass"=>$pass);
	list($msg,$bool)=$object->validData($inputs);
	if($bool==false){
		echo $msg;
	}
	elseif($bool==true&&$msg==count($inputs)){
		
		$res=$object->passTOinsert("users" ,"user,pass" ,"'$user', '$pass'");
		if($res==true){
			echo "done";
			header("location:login_mvc.html");
		}
		else{
			echo "wrong username or password";
		}
	}
	
	
	
}





?>