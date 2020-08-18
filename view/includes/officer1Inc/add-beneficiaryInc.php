<?php session_start(); ?>
<?php 
    //require_once("../contr/officer4Contr/officer4.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/beneficiary.class.php"); 
?>

<?php 

	$errors = array();
	$Divisional_Secretariat='';
	$Bank_Zonal='';
	$GN_Division='';
	$GN_Code_Mapping='';
	$Householder_Name='';
	$Address='';
	$NIC='';
	$No_of_Family_Members='';
	$Bank_Account_No='';
	$Relief_Ammount='';
	$Starting_Year='';



	if(isset($_POST['submit'])){

		$Divisional_Secretariat = $_POST['Divisional_Secretariat'];
		$Bank_Zonal = $_POST['Bank_Zonal'];
		$GN_Division = $_POST['GN_Division'];
		$GN_Code_Mapping = $_POST['GN_Code_Mapping'];
		$Householder_Name = $_POST['Householder_Name'];
		$Address = $_POST['Address'];
		$NIC = $_POST['NIC'];
		$No_of_Family_Members = $_POST['No_of_Family_Members'];
		$Bank_Account_No = $_POST['Bank_Account_No'];
		$Relief_Ammount = $_POST['Relief_Ammount'];
		$Starting_Year = $_POST['Starting_Year'];


		//checking requiured fields
		$req_field = array('Divisional_Secretariat','Bank_Zonal','GN_Division','GN_Code_Mapping','Householder_Name', 'Address','NIC','No_of_Family_Members','Bank_Account_No','Relief_Ammount','Starting_Year');
		foreach ($req_field as $field) {
			if(empty(trim($_POST[$field]))){
				$errors[] = $field . " is required";
			}
		}

		//checking max length
		$max_len_field = array('Divisional_Secretariat'=> 100,'Bank_Zonal'=> 100,'GN_Division'=>100,'GN_Code_Mapping'=>100,'Householder_Name'=>100, 'Address'=>100,'NIC'=>15,'No_of_Family_Members'=>30,'Bank_Account_No'=>50,'Relief_Ammount'=>200);
		foreach ($max_len_field as $field => $max_len) {
			if(strlen(trim($_POST[$field]))>$max_len){
				$errors[] = $field . ' must be less than ' . $max_len . 'characters';
			}
		}

		if(empty($errors)){
			//no error found.. adding new record
			
			$beneficiary = new Beneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Ammount,$Starting_Year);
			$beneficiary->addBeneficiary();

		}else{
            $errors[] = 'Faild to add new record';	
        }


	}


 ?>