<?php session_start(); ?>


<?php //require_once("../include/islogged.inc.php");
    //checklogged("officer2");
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
include_once("../includes/officer2Inc/2ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 

	<div id="maincontainer" >
		
	<?php include_once("../includes/officer2Inc/dashInc.php"); ?>

	</div>


	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>
</main>