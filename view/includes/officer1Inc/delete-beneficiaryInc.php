<?php session_start(); ?> 
<?php 
    //require_once("../contr/officer4Contr/officer4.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer1Contr\officer1.class.php"); 
?>

<?php 
	//checking if a user is logged in
	// if(!isset($_SESSION['user_id'])){
	// 	header('Location: home-officer1.index.php');
	// }
 ?>

<?php 
	if(isset($_GET['Serial_No'])){

		$Serial_No = $_GET['Serial_No'];

		$officer1 = new Officer1();
		$officer1->deleteBeneficiary($Serial_No);
	} else {
		header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php');
	}

	