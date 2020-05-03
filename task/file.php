<?php
if(isset($_POST['click']))
{

$user=$_POST['user'];
$pass=$_POST['pass'];
if($user == null || $pass == null){
        echo "Fill the form, please";
    }

else{
       $filehandle=fopen('signPhp4.txt','a+');
	  fwrite($filehandle,$user."-");
	   
	   fwrite($filehandle,$pass.",");
	   
		
	    $arr=array($user=>$pass);
		foreach($arr as $user=>$pass)
		{
			 $user."<br>".$pass;
		}
				print_r($arr);
				
				
			
			
			
		}
		
		
		
		
		
		
		
		
    }
	
		
		
		
		
		
		
		
		
		











?>
