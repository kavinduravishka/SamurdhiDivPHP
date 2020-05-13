<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/css/main.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body>
    <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\header.inc.php"); ?>
     <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\sidebar.inc.php"); ?>
 	
    <main>
    	<div class="maincontainer">
    		<ul>
    			<li><a href="Benificiary-Count-Reports.php"><span>Benificiary Count Reports</span></a></li>
    			<li><a href=""><span>All Location Change Request Count Report</span></a></li>
    			<li><a href=""><span>All Location Changed Count Report</span></a></li>
    			<li><a href=""><span>All New Applicants Count Report</span></a></li>
    			<li><a href=""><span>All Deleted Count Report</span></a></li>
    			<li><a href=""><span>All Amendment Count Report</span></a></li>
    		</ul>
    	</div>
    </main>

</body>
</html>