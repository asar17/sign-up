<?php
session_start();
include_once("control_mvc.php");

$object=new control();
$dir=$_SESSION['dir'];
$x=$_SESSION['x'];
$id=$_SESSION['id'];

$files=scandir($dir."/".$x);
foreach($files as $file){

    $res=$object->passTOdelete("img","userID='$id'");

        unlink($dir."/".$x."/".$file);
        rmdir($dir."/".$x);

        header("location:profile_mvc.php");


    

}






?>