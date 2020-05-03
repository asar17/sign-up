<?php
include_once("upload.html");

include_once("control_mvc.php");
$object=new control();
session_start();
$user=$_SESSION['userUpdate'];

if(isset($_POST['click']))
{		if(is_dir($user))
	
	{				
		           $id=$_POST['hidden'];
					$_SESSION['id']=$id;
					
					$data=getdate(date("U"));
					$x= "$data[weekday] $data[month] $data[mday] $data[year]";
					//$_SESSION['dir']=$dir;
				   // $_SESSION['x']=$x;
	
					$rand1 = rand(9999,9999999);
					$rand2 = rand(9999,9999999);
					$rand3 = rand(9999,9999999);
					$dir=$user;
					$_SESSION['dir']=$dir;
					$_SESSION['x']=$x;
					if(is_dir($dir."/".$x))
					{
						
						$data=getdate(date("U"));
						$x= "$data[weekday] $data[month] $data[mday] $data[year]";
						
						$file=$_FILES['myFile']['name'];
						$fileTmpName=$_FILES['myFile']['tmp_name'];
						$size=$_FILES['myFile']['size'];
	
						$count=count($file);
						$_SESSION['count']=$count;
						for($i=0;$i<$count;$i++){
							$error=array();
							$allow_extension=array("jpg","png");
							$pic_extenstion[$i]=end(explode('.',$file[$i]));
							$rand1 = rand(9999,9999999);
							$rand2 = rand(9999,9999999);
							$rand3 = rand(9999,9999999);
							$new_name[$i]="$rand1"."$rand2"."$rand3".".".$pic_extenstion[$i];
							
							if(! in_array($pic_extenstion[$i],$allow_extension)){
								$error[]='<div>extension is not allow</div>';
							}
							if(empty($error)):
								//$_SESSION['dir']=$dir;
							    //$_SESSION['x']=$x;
								move_uploaded_file($fileTmpName[$i],$dir.'/'.$x.'/'.$new_name[$i]);
								$res=$object->passTOinsert("img" ,"userID,src" ," $id,'$new_name[$i]'");
									
										
										echo "<script src='main.js'></script>";
										header("Refresh:0;url=profile_mvc.php");
							//	$res2=$object->passTOselect( "*" ,"img","userID=$id");
							//	while($info=mysqli_fetch_array($res2)){
							//		$src=$info['src'];
							//		$_SESSION['src']=$src;

							//	}

		


									
							else:
								foreach($error as $info): 
									echo $info;
								endforeach;
							endif;		
						}
							
							
	

						echo "<script src='main.js'></script>";
						header("Refresh:0;url=profile_mvc.php");					
				}
					
					
					else
					{$data=getdate(date("U"));
						//$x= "$data[weekday] $data[month] $data[mday] $data[year]";	
					mkdir($dir."/".$x);
					$_SESSION['dir']=$dir;
					 $_SESSION['x']=$x;
					
					$file=$_FILES['myFile']['name'];
					$fileTmpName=$_FILES['myFile']['tmp_name'];
					$size=$_FILES['myFile']['size'];

					$count=count($file);
					for($i=0;$i<$count;$i++){
						$error=array();
						$allow_extension=array("jpg","png");
						$pic_extenstion[$i]=end(explode('.',$file[$i]));
						$rand1 = rand(9999,9999999);
						$rand2 = rand(9999,9999999);
						$rand3 = rand(9999,9999999);
						$new_name[$i]=$rand1.$rand2.$rand3.".".$pic_extenstion[$i];
						
						if(! in_array($pic_extenstion[$i],$allow_extension)){
                            $error[]='<div>extension is not allow</div>';
						}
						if(empty($error)):
							move_uploaded_file($fileTmpName[$i],$dir.'/'.$x.'/'.$new_name[$i]);
							$res=$object->passTOinsert("img" ,"userID,src" ," $id,'$new_name[$i]'");
									
										
										echo "<script src='main.js'></script>";
										header("Refresh:0;url=profile_mvc.php");
										$res2=$object->passTOselect( "*" ,"img","userID=$id");
								while($info=mysqli_fetch_array($res2)){
									$src=$info['src'];
									$_SESSION['src']=$src;

								}
										

						else:
							foreach($error as $info): 
								echo $info;
							endforeach;
						endif;		
					}
						
						

						
						
					}
					
					
						
					
					
						
					
					
	}
		else
		{	mkdir($user);
					
					
					
			        $id=$_POST['hidden'];
					$dir=$user;
					$data=getdate(date("U"));
					$x= "$data[weekday].$data[month] .$data[mday].$data[year]";
					

				//	echo "<script src='main.js'></script>";
				//	header("Refresh:0;url=profile_mvc.php");		
			if(is_dir($dir."/".$x))
					{$_SESSION['dir']=$dir;
						$_SESSION['x']=$x;
						$data=getdate(date("U"));
					//	$x= "$data[weekday] $data[month] $data[mday] $data[year]";
						$file=$_FILES['myFile']['name'];
					$fileTmpName=$_FILES['myFile']['tmp_name'];
					$size=$_FILES['myFile']['size'];

					$count=count($file);
					for($i=0;$i<$count;$i++){
						$error=array();
						$allow_extension=array("jpg","png");
						$pic_extenstion[$i]=end(explode('.',$file[$i]));
						$rand1 = rand(9999,9999999);
						$rand2 = rand(9999,9999999);
						$rand3 = rand(9999,9999999);
						$new_name[$i]=$rand1.$rand2.$rand3.".".$pic_extenstion[$i];
						
						if(! in_array($pic_extenstion[$i],$allow_extension)){
                            $error[]='<div>extension is not allow</div>';
						}
						if(empty($error)):
							move_uploaded_file($fileTmpName[$i],$dir.'/'.$x.'/'.$new_name[$i]);
							$res=$object->passTOinsert("img" ,"userID,src" ," $id,'$new_name[$i]'");
									
										
										echo "<script src='main.js'></script>";
										header("Refresh:0;url=profile_mvc.php");
									
										










						else:
							foreach($error as $info): 
								echo $info;
							endforeach;
						endif;		
					}
						
						



					echo "<script src='main.js'></script>";
					header("Refresh:0;url=profile_mvc.php");					}
				else
					{
						$data=getdate(date("U"));
						//$x= "$data[weekday] $data[month] $data[mday] $data[year]";
						
					mkdir($dir."/".$x);
					$_SESSION['dir']=$dir;
					$_SESSION['x']=$x;
					$file=$_FILES['myFile']['name'];
					$fileTmpName=$_FILES['myFile']['tmp_name'];
					$size=$_FILES['myFile']['size'];

					$count=count($file);
					
					for($i=0;$i<$count;$i++){
						$error=array();
						$allow_extension=array("jpg","png");
						$pic_extenstion[$i]=end(explode('.',$file[$i]));
						$rand1 = rand(9999,9999999);
						$rand2 = rand(9999,9999999);
						$rand3 = rand(9999,9999999);
						$new_name[$i]=$rand1.$rand2.$rand3.".".$pic_extenstion[$i];
						
						if(! in_array($pic_extenstion[$i],$allow_extension)){
                            $error[]='<div>extension is not allow</div>';
						}
						if(empty($error)):
							move_uploaded_file($fileTmpName[$i],$dir.'/'.$x.'/'.$new_name[$i]);
							$res=$object->passTOinsert("img" ,"userID,src" ," $id,'$new_name[$i]'");
									
										
										echo "<script src='main.js'></script>";
										header("Refresh:0;url=profile_mvc.php");
								
										

						else:
							foreach($error as $info): 
								echo $info;
							endforeach;
						endif;		
					}
						
						





				
					
						
						
					
		
		
		
		
		}
	
	
	
	
	
	
	
	
}
		}
?>