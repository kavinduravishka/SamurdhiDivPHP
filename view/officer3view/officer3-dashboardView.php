<?php session_start(); ?>


<?php //require_once("../include/islogged.inc.php");
    //checklogged("officer3");
 ?>

<html>
<head>
	<title>Dashboard</title>

	<link rel="stylesheet" type="text/css" href="../css/main_dk.css">
	

	<link rel="stylesheet" type="text/css" href="../css/officer23dash.css" >


</head>

<body>
	<?php //require_once("../include/header.inc.php"); 
	require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php");
	?>


	<main >
		<div class="maindev" >

			<div class="tbldev">
			<table >
				<tr>
					<th>
						<img src="../images/sbt.png" height=100 width=100></img>
					</th>
					<th width="700px">
						Dashboard
					</th>
				</tr>
			</table>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="SSFBoard.index.php" >සමාජ ආරක්ෂණ අරමුදල</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="ScholarBoard.index.php" >සිප්දොර ශිෂ්‍යත්ව අරමුදල</a>
			</div>
			</div>

		</div>
	</main>
</body>