<?php  

session_start();

?>

<?php 

require_once("../includes/islogged.inc.php");
checklogged("2");

?>

<?php

$includes = array(
	"001"=>"officer2.001Inc.php", //CBO
	"002"=>"officer2.002Inc.php",

	"101"=>"officer2.101Inc.php", //Lotttary

	"201"=>"officer2.201Inc.php" //MF record
);

include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer2Inc/{$includes[$_GET['formid']]}");

?>

<html>

<?php  //meta tag



$titles = array(
	"001"=>"Register Community Based Organization", //CBO
	"002"=>"Add CBO Commity members",

	"101"=>"Add Lottary Fund Winner", //Lotttary

	"201"=>"Add  Mandatory fund request record" //MF record
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
include_once("../includes/officer2Inc/2ksidebar.inc.php");//include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 

<div id="maincontainer">

<?php  

$includes = array(
	"001"=>"officer2.001form.php", //CBO
	"002"=>"officer2.002form.php",

	"101"=>"officer2.101form.php", //Lotttary

	"201"=>"officer2.201form.php" //MF record
);

include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer2Inc/{$includes[$_GET['formid']]}");

?>
	
</div>


	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
	<script type="text/javascript" src="../js/konsubmit.js"></script>
</body>

</html>