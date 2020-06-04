<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/beneficiariesInc.php");
?>




<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	 <link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	 <?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\include\header.inc.php"); ?>
	 <?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\include\sidebar.inc.php"); ?>

	 <?php 
        //require_once("../view/includes/header.inc.php"); 
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php");
    ?> 
	 <?php 
    	// $navpaths=array("Dashboard"=>"officer1-dashboard.index.php");
		// require_once("../include/navbar.inc.php");
	?>
	
	<center>
		<main>
		<div class="maincontainer" >
		
		<h1>Beneficiaries  <span><a href="Beneficiaries.index.php">Refresh</a></span></h1>
		<div class="search">
			<form action="Beneficiaries.index.php" method="get">
				<p><input type="text" name = "search" id="" placeholder="Type Full Name  or NIC and Press Enter" value="<?php echo $search; ?>"></p>
			</form>
		</div>
		<table class="masterlist">
			<tr><th>Serial No</th><th>Divisional Secretariat</th><th>Bank Zonal</th><th>G.N Division</th><th>G.N_Code Mapping</th><th>Householder Name</th><th>Address</th><th>NIC</th><th>No.of Family Members</th><th>BankAccount No</th><th>Relief Amount</th><th>Starting Year</th><th>Edit</th><th>Delete</th></tr>
			<?php
			// $officer1 = new officer1();
			// if(isset($_GET['search'])){
			// 	 $search = $_GET['search'];
			// 	 $officer1->searchBeneficiary($search);
			// }else{
			// 	 $officer1->showBeneficiaries();
			// }
			// unset($officer1);
				echo $beneficiaryList;
			 ?>
		</table>
	</main>
	</center>
	
	
	
</body>
</html>
