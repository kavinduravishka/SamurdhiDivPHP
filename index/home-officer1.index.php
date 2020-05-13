<?php session_start(); ?> 
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\classes\Officer1.class.php") ?>


<?php 
	// if(!isset($_SESSION['user_id'])){
	// 	header('Location: index.php');
	// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/css/main.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\include\header.inc.php"); ?>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\include\sidebar.inc.php"); ?>
	
	
	<main >
		<div class="maincontainer" >
		<h1>Beneficiaries </h1>
		<table class="masterlist">
			<tr><th>Serial No</th><th>Divisional Secretariat</th><th>Bank Zonal</th><th>G.N Division</th><th>G.N_Code Mapping</th><th>Householder Name</th><th>Address</th><th>NIC</th><th>No.of Family Members</th><th>BankAccount No</th><th>Relief Account</th><th>Starting Year</th><th>Edit</th><th>Delete</th></tr>
			<?php 
				$officer1 = new officer1();
				$officer1->showBeneficiaries();
				unset($officer1);
			 ?>
		</table>
	</main>
</body>
</html>
