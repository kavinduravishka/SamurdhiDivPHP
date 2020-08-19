<?php session_start(); ?>


<?php //require_once("../include/islogged.inc.php");
    //checklogged("officer3");
 ?>

<html>

<meta name="pagedata" tab="dash">
<head>
	<title>Dashboard</title>

	<link rel="stylesheet" type="text/css" href="../css/ksidebar.css" >
	<link rel="stylesheet" type="text/css" href="../css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="../css/kbody.css" >


</head>

<body>
	
<?php 
include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
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

	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>
</html>