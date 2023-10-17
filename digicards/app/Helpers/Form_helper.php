<?php 
	function display_error($validation,$field){
		if($validation->hasError($feild)){
			return $validation->getError($field);
		}else{
			return false;
		}
	}