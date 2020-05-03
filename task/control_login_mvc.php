<?php


include_once("config_mvc.php");
class control{
	

		
		
		
		
	
	public function passTOinsert($table,$cols,$values){
		$object=new model();
		$bool=$object->insertData($table,$cols,$values);
		return $bool;
	}
	public function passTOselect($cols,$table,$cond){
		$object=new model();
		$res=$object->selectData($cols,$table,$cond);
		return $res;
		
	}
	public function passTOupdate($table,$colsANDvalue,$cond){
		$object=new model();
		$bool=$object->updateData($table,$colsANDvalue,$cond);
		return $bool;
		
	}
	public function passTOdelete($table,$cond){
		$object=new model();
		$bool=$object->deleteData($table,$cond);
		return $bool;
		
	}
	
	
	
	
	
	
}

?>