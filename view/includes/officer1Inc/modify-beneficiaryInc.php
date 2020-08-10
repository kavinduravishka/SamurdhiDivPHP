<?php session_start(); ?>
<?php 
    //require_once("../contr/officer4Contr/officer4.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer1Contr\officer1.class.php"); 
?>
<?php 

	$errors = array();
	$Serial_No = '';
	$Bank_Zonal = '';
	$GN_Division = '';
	$Address = '';
	$Bank_Account_No = '';

	//view the user
	if(isset($_GET['Serial_No'])){

		$Serial_No = $_GET['Serial_No'];
	
	}
	//when submit
	if(isset($_POST['submit'])){

		//$Serial_No = $_POST['Serial_No'];
		$Bank_Zonal = $_POST['Bank_Zonal'];
		$GN_Division = $_POST['GN_Division'];
		$Address = $_POST['Address'];
		$Bank_Account_No = $_POST['Bank_Account_No'];

		
		//checking requiured fields
		$req_field = array('Bank_Zonal','GN_Division','Address','Bank_Account_No');
		foreach ($req_field as $field) {
			if(empty(trim($_POST[$field]))){
				$errors[] = $field . " is required";
			}
		}

		//checking max length
		$max_len_field = array('Bank_Zonal'=>100,'GN_Division'=>100,'Address'=>100,'Bank_Account_No'=>50);
		foreach ($max_len_field as $field => $max_len) {
			if(strlen(trim($_POST[$field]))>$max_len){
				$errors[] = $field . ' must be less than ' . $max_len . 'characters';
			}
		}

		if(empty($errors)){

			//no error found.. adding new record
			$Bank_Zonal = $_POST['Bank_Zonal'];
			$GN_Division = $_POST['GN_Division'];
			$Address = $_POST['Address'];
			$Bank_Account_No = $_POST['Bank_Account_No'];
			
			// email address is already sanitize
			// $hashed_password = sha1($password);

			$officer1 = Officer1::getInstance();
			$officer1->updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$Serial_No);
			// unset($officer1);
		}

	}



 ?>