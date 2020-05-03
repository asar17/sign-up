<?php
session_start();
//$src=$_SESSION['src'];
include_once("control_mvc.php");

$object=new control();
 $src=$_POST['check'];
 print_r($src) ;
 
 //echo $count=count($src);




        
    
   $dir=$_SESSION['dir'];
   $x=$_SESSION['x'];
   foreach($src as $src1){
    
            $files=glob($dir."/".$x."/".$src1);
            foreach($files as $file){
                if(is_file($file)){
                    unlink($file);

                }

            }



                $res=$object->passTOdelete("img","src='$src1'");

                        if($res==true){
                            echo "<script src='main.js'></script>";
                            header("Refresh:0;url=profile_mvc.php");
                        }
     }

        
                    //header("Location:profile_mvc.php");


?>