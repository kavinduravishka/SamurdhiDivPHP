<html>
<head>
	<title>Dashboard</title>

	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" >

	<link rel="stylesheet" type="text/css" href="../css/officer23dash.css" >


</head>

<body>
	<?php require_once("../include/header.inc.php"); ?>
	<?php require_once("../include/sidebar2.inc.php"); ?>

	<?php

		session_start();

		

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
</body>