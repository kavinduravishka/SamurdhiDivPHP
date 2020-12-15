<?php session_start(); ?> 
<?php 
if($_SESSION['user_id']!=1){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }
    
    //require_once("../contr/officer4Contr/officer4.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer1Contr\beneficiary.class.php"); 
?>



<?php 
	if(isset($_GET['Serial_No'])){

		$Serial_No = $_GET['Serial_No'];

		Beneficiary::deleteBeneficiary($Serial_No);
	} else {
		header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php');
	}

	