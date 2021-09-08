<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/beneficiariesInc.php");
?>


<!DOCTYPE html>
<html>
<head>


	<meta name="pagedata" tab="dash" type="" title="Add Beneficiary">

	<title>Samurdhi Division</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css">
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	
</head>
<body>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
	<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/yheader.inc.php"); ?>
	 <?php include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer1Inc/officer1_sidebarInc.php"); ?>
	  

	
	
		<main style="margin-left: 50px;">
		<div class="maincontainer" >
		<center><h1>Beneficiaries &nbsp; <span ><a href="beneficiariesView.php" style="text-decoration: none;"><i class="fas fa-sync-alt"></i></a></span></h1></center>
		
		
		<div class="search-container" style='padding-bottom:20px;'>
			<form action="beneficiariesView.php" method="get">
				<input type="text" name = "search" id="" placeholder="Type Full Name  or NIC and Press Enter" value="<?php echo $search; ?>" >			
			</form>
		</div>
	
		<table class="masterlist">
			<tr><th>Serial No</th><th>Divisional Secretariat</th><th>Bank Zonal</th><th>G.N Division</th><th>G.N_Code Mapping</th><th>Householder Name</th><th>Address</th><th>NIC</th><th>No.of Family Members</th><th>BankAccount No</th><th>Relief Amount</th><th>Starting Year</th><th>Edit</th><th>Delete</th></tr>
			<?php
				echo $beneficiaryList;
			 ?>
		</table>
	
		</div>
	</main>
	 <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>	
</body>
</html>
