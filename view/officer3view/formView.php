<?php

session_start();

$includes = array(
	"001"=>"officer3.001Inc.php", //Scholar

	"101"=>"officer3.101Inc.php",
	"102"=>"officer3.102Inc.php", //SSF
	"103"=>"officer3.103Inc.php" 
);

include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer3Inc/{$includes[$_GET['formid']]}");

?>

<html>

<?php  //meta tag



$titles = array(
	"001"=>"Add Sipdora Scholarship record", //Scholarship

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
include_once("../includes/officer3Inc/3ksidebar.inc.php");//include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 

<div id="maincontainer">

<?php  

$includes = array(
	"001"=>"officer3.001form.php", 

	"101"=>"officer3.101form.php", 
	"102"=>"officer3.102form.php", 
	"103"=>"officer3.103form.php", 

);

include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer3Inc/{$includes[$_GET['formid']]}");

?>
	
</div>

	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>

</html>