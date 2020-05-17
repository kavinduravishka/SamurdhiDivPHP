<?php session_start(); ?>


<?php require_once("../include/islogged.inc.php");
    checklogged("officer2");
 ?>
 
<html>
<head>
	<title>Dashboard</title>


	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/main_dk.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" >

	<link rel="stylesheet" type="text/css" href="../css/officer23dash.css" >
	<link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" >


</head>

<body>
	<?php require_once("../include/header.inc.php"); ?>


	
	<?php

		$navpaths=array("Dashboard"=>"officer2-dashboard.index.php");

		require_once("../include/navbar.inc.php");
		?>



	<main >

		
		<div class="maincontainer maindev" >

			<div class="tbldev">
			<table >
				<tr>
					<th>
						<img src="../images/sbt.png" height=100 width=100></img>
					</th>
					<th width="700px">
						ප්‍රජාමූල සංවිධාන
					</th>
				</tr>
			</table>
			</div>

			<div class="linkdev">
			<div class="adev">
				
				<a href="CBORegistration.index.php" ><?php $_SESSION['init_task']='1';?>නව සංවිධානයක් ලියාපදිංචිය</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				
				<a href="CBORegistration.index.php" ><?php $_SESSION['init_task']='1';?>ලියාපදිංචිය අලුත් කිරීම</a>
			</div>
			</div>

			

			

		</div>
	</main>
</body>