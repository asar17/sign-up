<?php


$files=$_FILES['work'];
$name=$files['name'];
$tmp=$files['tmp_name'];
$error2=$files['error'];
$count=count($name);


for($i=0;$i<$count;$i++){
        $error=array();
        $all=array();
        $allow=array('jpg');
        $ex[$i]=end(explode('.',$name[$i]));
        $rand[$i]=rand(0,2000000000);
        $new_name[$i]=$rand[$i].".".$ex[$i];

        if($error2[0] ==4):
            $error[]= '<div>file not uploaded</div>';
            else:
                if(! in_array($ex[$i],$allow)):
                    $error[]='<div>extension not</div>';
                
                endif;    
            
        endif; 
        if(empty($error)):
           move_uploaded_file($tmp[$i],$_SERVER['DOCUMENT_ROOT'].'\test\h\\'.$new_name[$i]); 
           echo 'file upload'. ($i+1)."<br>";
           $all[]=$new_name[$i];
           print_r($all);
           $all=implode(',,,,,',$all);
           echo $all;
        else:
            foreach($error as $info): 
                echo $info;
            endforeach;    
        endif;      











}
       

echo realpath('uploat-multi.php');


$link = mysqli_connect("localhost","root","");
$db=mysqli_select_db($link,"mediical");  
$userID=$_GET['id'];
echo $userID;
$query="SELECT * FROM worker WHERE wID = ? " ;
$re=mysqli_query($link,$query);
$res2=mysqli_fetch_array($re);
$wID=$res2['wID'];
$name=$res2['firstName'];
echo $name;
     












?>

<form action="uploat-multi.php" method="post" enctype="multipart/form-data">
<input type='file' name='work[]' multiple='multiple' value="" />
<input type='submit' name='uload' value='upload' />
</form>
<form>
<fieldset>
<legend>information hellllllllo</legend>
</fieldset>
</form>