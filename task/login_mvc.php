<?php
session_start();
include_once("control_mvc.php");
$object=new control();
if(isset($_POST['click'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
		
		$res=$object->passTOselect( "*" ,"users","user='$user' AND pass='$pass'");
		if(mysqli_num_rows($res)==0){
		echo "WRONG USERNAME OR PASSWORD";
	}
		else
			{ 

			$data=mysqli_fetch_array($res);
     
			$_SESSION['id']=$data['id'];
			header("location:profile_mvc.php");
	}
	
	
}	

?>