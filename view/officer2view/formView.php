<?php  ?>

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
include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 

<div id="maincontainer">


	
</div>


	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
	<script type="text/javascript" src="../js/kosubmit.js"></script>
</body>

</html>