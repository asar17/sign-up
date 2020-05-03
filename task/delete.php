<?php

$deleteID=$_GET['idD'];
$connect=mysqli_connect("localhost","root","");
$selectDB=mysqli_select_db($connect,"sign_test");
$result="DELETE FROM test_sign WHERE id=$deleteID";
$mysqlQuery=mysqli_query($connect,$result);
echo "You Remove Your Account ";
include_once("s.html");





?>