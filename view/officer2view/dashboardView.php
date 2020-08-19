<?php session_start(); ?>


<?php //require_once("../include/islogged.inc.php");
    //checklogged("officer2");
 ?>

<html>

<head>
	<title>Dashboard</title>

	<link rel="stylesheet" type="text/css" href="../css/ksidebar.css" >
	<link rel="stylesheet" type="text/css" href="../css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="../css/kbody.css" >

</head>

<meta name="pagedata" tab="dash">

<body>
	
<?php 
include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
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
							Dashboard
						</th>
					</tr>
				</table>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="MFRBoard.index.php" >අනිවාර්ය ඉතිරි කිරීම්</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="CBOBoard.index.php" >ප්‍රජාමූල සංවිධාන</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="LFBoard.index.php" >ලොතරැයි අරමුදල</a>
			</div>
			</div>


		</div>
	</main>

	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>

</body>
</main>