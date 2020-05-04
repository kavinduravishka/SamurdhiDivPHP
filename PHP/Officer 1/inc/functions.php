<?php 
	
	function verify_query($result_set){
		global $connection;

		if(!$result_set){
			die("Database query failed: ".mysqli_error($connection));
		}
	}


	function check_req_fields($req_fields){
		//check required fields
		$errors =array();
		foreach ($req_fields as $field) {
			if(empty(trim($_POST[$field]))){
				$errors[] = $field.' is required';
			}
			return $errors;
		}
	}

 ?>