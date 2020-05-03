<?php
include_once("config_mvc.php");
class control{
	public function validData(array $inputs){
		$counter=0;
		foreach($inputs as $key=>$val){
			if($key=="user"){
				list($msg,$bool)=$this->validUser($val);
				if($bool==false){
					$arr[]=$msg;
					$arr[]=false;
					return $arr;
				}
				else{
					$counter++;
				}
				
			}
			elseif($key=="pass"){
				list($msg,$bool)=$this->validPass($val);
				if($bool==false){
					$arr[]=$msg;
					$arr[]=false;
					return $arr;
				}
				else{
					$counter++;
				}
				
			}
			
		
		
		
		
		
		elseif($key=="post"){
				list($msg,$bool)=$this->validateText1to300($val);
				if($bool==false){
					$arr[]=$msg;
					$arr[]=false;
					return $arr;
				}
				else{
					$counter++;
				}
				
			}
		}
			$arr[]=$counter;
		$arr[]=true;
		return $arr;
			
		}
		
		
		
		
		
		
		
		
		
		
		
	
	private function validUser($user){
		if($user==null){
			$arr[]="fill your user";
			$arr[]=false;
			return $arr;
		}
		elseif(strlen($user)<5){
			$arr[]="user is short";
			$arr[]=false;
			return $arr;
		}
		else{
			$arr[]="valid username";
			$arr[]=true;
			return $arr;
			
		}
		
		
	}
	private function validPass($pass){
		if($pass==null){
			$arr[]="fill your password";
			$arr[]=false;
			return $arr;
		}
		elseif(strlen($pass)<5){
			$arr[]="password is short";
			$arr[]=false;
			return $arr;
		}
		else{
			$arr[]="valid password";
			$arr[]=true;
			return $arr;
			
		}
	}
		private function validateText1to300($post){
		if($post==null){
			$arr[]="fill your post";
			$arr[]=false;
			return $arr;
		}
		 elseif(strlen($post) < 1 && strlen($post) > 300){
            $arr[] = "Post must be between 1 : 300 chars";
            $arr[] = false;
            return $arr;
		}
		else{
			$arr[]="valid post";
			$arr[]=true;
			return $arr;
			
		}
		
		
	}
		
		
		
		
	
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