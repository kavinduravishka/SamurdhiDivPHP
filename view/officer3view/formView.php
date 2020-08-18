<?php  ?>

<html>

<?php  //meta tag



$titles = array(
	"001"=>"Add  Sipdora Scholarship record", //Scholarship

	"101"=>"Social Security Fund application", //Social security fund
	"102"=>"Add family member - SSF",
	"103"=>"Add Social Security payment"

);

$title = $titles[$_GET['formid']];


echo <<<EOD
<meta name="pagedata" tab="task" type="form" title="{$title}">
EOD;


?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/ksidebar.css" >
	<link rel="stylesheet" type="text/css" href="../css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="../css/kbody.css" >
    
</head>

<body>

	

<?php 
include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 

<div id="maincontainer">
	<h1>Contents</h1>
</div>


	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>

</html>