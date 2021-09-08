<?php 

session_start();
?>

<?php 

require_once("../includes/islogged.inc.php");
checklogged("2");

?>

<?php 
include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer2Inc/officer2.MFrepInc.php");
?>

<html>

<meta name="pagedata" tab="task" type="report" title="Mandatory Fund release report"> 

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
<form action="reportView.php" method="post">

<table class="tblsub">
	<tr>
		<td><input type="submit" name="Show" value="Show"></td>
		<td><input type="submit" name="Print" value="Print"></td>
	</tr>
</table>
</form>
</div>


<?php echo $reportContent; ?>

	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>

</html>