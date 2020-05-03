<?php
$link=mysqli_connect("localhost","root","");
$linkToDb=mysqli_select_db($link,"sign_test");
$query="select * from emp";
$result=mysqli_query($link,$query);
include_once("formEmp.html");


?>