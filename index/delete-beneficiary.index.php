<?php session_start(); ?> 
<?php require_once("../classes/Officer1.class.php") ?>

<?php 
	//checking if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header('Location: home-officer1.index.php');
	}
 ?>
<!-- form validation -->
<?php 

	

	//view the user
	if(isset($_GET['Serial_No'])){

		$Serial_No = $_GET['Serial_No'];

		$officer1 = new Officer1();
		$officer1->deleteBeneficiary($Serial_No);
		unset($officer1);
	} else {
		header('Location: home-officer1.index.php');
	}

	