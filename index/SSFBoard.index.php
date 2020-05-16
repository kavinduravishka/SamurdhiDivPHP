<?php session_start();?>

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
    $navpaths=array("Dashboard"=>"officer3-dashboard.index.php");
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
						සමාජ ආරක්ෂණ අරමුදල
					</th>
				</tr>
			</table>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="SSFApplication.index.php" >ප්‍රතිලාභියෙකු එකතු කිරීම</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="test.php" >ප්‍රතිලාභී පවුල්වල සාමාජිකයින් සංශෝධනය</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="test.php" >වර්තමාන සහ/හෝ මීලඟ හිමිකරු වෙනස් කිරීම</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="test.php" >ප්‍රතිලාභියා ඉවත් කිරීම</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="SSFPayments.index.php" >සහනාධාර ගෙවීම</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="test.php" >මාසික වාර්තාව</a>
			</div>
			</div>

			

			

		</div>
	</main>
</body>