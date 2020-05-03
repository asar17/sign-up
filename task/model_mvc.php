<?php
class model{
	public function insertData($table,$cols,$values){
    $object=new config();
	$Q="INSERT INTO $table ($cols) VALUES ($values)";
	$bool=mysqli_query($object->link,$Q);
		return $bool;	
	}
	public function selectData($cols,$table,$cond){
    $object=new config();
	$Q="SELECT $cols FROM $table WHERE $cond";
	$res=mysqli_query($object->link,$Q);
	
			
        return $res;		
	}
	public function updateData($table,$colsANDvalue,$cond){
    $object=new config();
	$Q="UpDATE $table SET $colsANDvalue WHERE $cond";
	$bool=mysqli_query($object->link,$Q);
		return $bool;	
	}
	public function deleteData($table,$cond){
    $object=new config();
	$Q="DELETE FROM $table WHERE $cond";
	$bool=mysqli_query($object->link,$Q);
		return $bool;	
	}
	
	
	
}




?>
