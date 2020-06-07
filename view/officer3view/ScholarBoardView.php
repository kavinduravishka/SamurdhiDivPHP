<?php session_start();?>


<?php require_once("../include/islogged.inc.php");
    checklogged("officer3");
 ?>

<html>
<head>
	<title>Dashboard</title>


	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/main_dk.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" >

	<link rel="stylesheet" type="text/css" href="../css/officer23dash.css" >
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/styles/navbar.css">


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
						සිප්දොර ශිෂ්‍යත්ව අරමුදල
					</th>
				</tr>
			</table>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="Scholarships.index.php" >ශිෂ්‍යත්වලාභියෙකු එකතු කිරීම</a>
			</div>
			</div>

			<div class="linkdev">
			<div class="adev">
				<a href="test.php" >ශිෂ්‍යත්වලාභියෙකු ඉවත් කිරීම
</a>
			</div>
			</div>

			

			

		</div>
	</main>
</body>