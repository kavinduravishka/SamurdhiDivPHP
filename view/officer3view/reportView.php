<?php  

session_start();
?>

<?php 

require_once("../includes/islogged.inc.php");
checklogged("3");

?>

<?php 
include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer3Inc/officer3.SSFrepInc.php");
?>

<html>



<!-- <meta name="pagedata" tab="task" type="form" title="Add member"> -->
<meta name="pagedata" tab="task" type="report" title="SSF payment monthly report"> 

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
<form action="reportView.php" method="post">





<table class="tblsub">
	<tr>
		<td><label>year</label> <input name="year" type="number" value="<?php echo $_POST['year'] ?>" required></td>
		<td><label>month</label> <input name="month" type="number" value="<?php echo $_POST['month'] ?>" required></td>
	</tr>
</table>


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