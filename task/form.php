<?php

	echo $user=$_POST['user'];
	echo $pass=$_POST['pass'];
	$x=mysqli_connect("localhost","root","");
	$xtodb=mysqli_select_db($x,"futuref");
	$mysqlQuery="INSERT INTO test_sql(user,pass) VALUES ('$user','$pass')";
	$xInsert=mysqli_query($x,$mysqlQuery);
	



?>