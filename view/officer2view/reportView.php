<?php 

session_start();
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
include_once("../includes/ksidebar.inc.php");
include_once("../includes/kheader.inc.php");
?> 


<div id="maincontainer">
<form action="reportView.php" method="post">

<label>year</label> <input name="year" type="number" value="">
<label>month</label> <input name="month" type="number" value=""><br>

<input type="submit" name="Show" value="show">
<input type="submit" name="Print" value="print">
</form>
</div>


<?php echo $reportContent; ?>

	<script type="text/javascript" src="../js/ksidebar.js"></script>
	<script type="text/javascript" src="../js/kheader.js"></script>
	<script type="text/javascript" src="../js/konload.js"></script>
</body>

</html>