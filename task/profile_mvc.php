<?php
session_start();

include_once("control_mvc.php");
$object=new control();
	$ID=$_SESSION['id'];
	$res=$object->passTOselect( "*" ,"users","id=$ID ");
	$data=mysqli_fetch_array($res);
	 	$id=$data['id'];
	 	$user=$data['user'];
		$password=$data['pass'];


		//$json[]=array("id"=>$id,"user"=>$user,"password"=>$password);
		//echo json_encode($json);



	echo $id."<br>";
	echo $user."<br>";
	echo $password;
	include_once("post_mvc.html");
		$res=$object->passTOselect( "*" ,"posts","userID=$ID ORDER BY date DESC");
		while($userData=mysqli_fetch_array($res)){
		$x= $userData['post'];
		echo "<h1 style='color:blue'>$x</h1>";
		
		$idPost=$userData['id'];
		echo $userData['date'];
		include("update_mvc.html");
		include("upload.html");
		echo "<a href='delete_mvc.php?idPosts=".$idPost."'>Delete Post</a>";
		echo "<button type='button'  data-toggle='modal' data-target='#mod'>update</button>";
		



		echo "<br>"."<hr>";
		}
		
		
	

	echo "<button type='button'  data-toggle='modal' data-target='#mod2'>upload</button>";
	echo "<button ><a href='rmdir.php' style='text-decoration:none'>remove dir</a></button>";
	echo "<button type='submit' form='form1' value='delete'> Delete</button>"."<br>" ;

	
	$res2=$object->passTOselect( "*" ,"img","userID=$id");
		$dir=$_SESSION['dir'];
        $x=$_SESSION['x'];

       

echo "<form   action='delete_img.php'   method='post' id='form1'> ";
	   while($info=mysqli_fetch_array($res2)){

		$src1=$info['src'];
		 $id=$info['userID'];
		$src=$dir."/".$x."/".$src1;
		//$_SESSION['src']=$src;
		$_SESSION['id']=$id;
		$count=0;
	   

			echo "<img src='$src' height='100'  width='100' />";
			echo $src1;
			echo " 
				 <input type='checkbox'  name='check[]' value='$src1' checked='true'/>
				 
			
			
			"."<br>";
			
		


			//echo "<a href='download.php?file=" . urlencode($src1) ."'>Download</a>"."<br>";
	   }
	   echo "</form>";
	  

	   $dirName=$dir."/".$x;
	   if(! glob($dirName."/*")){
		   echo "no files";
	   }











	  // $json=array(
		//   array("name"=>"athar","age"=>20),
		//   array("name"=>"athar","age"=>20),
		//   array("name"=>"athar","age"=>20)
	  // );
	  // echo json_encode($json);







?>
