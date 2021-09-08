<?php

session_start();

?>

<?php 

require_once("../includes/islogged.inc.php");
checklogged("3");

?>

</html>

<meta name="pagedata" tab="report">

<head>
	<link rel="stylesheet" type="text/css" href="../css/ksidebar.css" >
	<link rel="stylesheet" type="text/css" href="../css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="../css/kbody.css" >
    
</head>

<body>

	

<?php 
include_once("../includes/officer3Inc/3ksidebar.inc.php");//include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 

<div id="maincontainer">
	<h3 class="tl1">Social Security  Fund</h3>
		<a class="link" href="reportView.php">Get monthly SSF release report</a>
</div>


<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>

</html>