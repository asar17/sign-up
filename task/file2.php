<?php


if(isset($_POST['click2']))
		{
			$userPost=$_POST['user2'];
			$passPost=$_POST['pass2'];
			
			
			
					$filehandle=fopen('signPhp4.txt','r');
					$file=fread($filehandle,filesize('signPhp4.txt'));
				
					$arrNew=explode(",",$file);
				
					//print_r($arrNew);
					for($i=0;$i<count($arrNew);$i++){
					$arrNew2=explode("-",$arrNew[$i]);
					print_r($arrNew2)."<br>";

					//echo $arrNew=$arrNew2[0]."<br>"; 
					//echo $arrNew=$arrNew2[1];

					if($userPost==$arrNew2[0] && $passPost==$arrNew2[1]){
						header("location:profile2.php");

					}
					else{
						echo "no-matching";
					}
					  
					}
					
					
					
					
					
					
		}
		


				
				
?>