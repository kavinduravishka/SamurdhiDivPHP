<?php  session_start();
	
	if($_SESSION['user_id']!=1){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="pagedata" tab="report" type="" title="Add Beneficiary">
	<title>Reports</title>
	
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css">
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
	
</head>
<body>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
	<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/yheader.inc.php"); ?>
	 <?php include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer1Inc/officer1_sidebarInc.php"); ?>

 	
    <main class="mainReport" >
    	<div class="maincontainer ">
    		<ul class = "ReportView">
    			<li><a href="Benficiary-Count-ReportView-Yatigaha.php?type=1"><span>Benificiary Count Report - Yatigaha</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Badalgama.php?type=2"><span>Benificiary Count Report - Badalgama</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Divulapitiya.php?type=3"><span>Benificiary Count Report - Divulapitiya</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Dunagaha.php?type=4"><span>Benificiary Count Report - Dunagaha</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Katuwelgama.php?type=5"><span>Benificiary Count Report - Katuwelgama</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Koongodamulla.php?type=6"><span>Benificiary Count Report - Koongodamulla</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Kotadeniyawa.php?type=7"><span>Benificiary Count Report - Kotadeniyawa</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Walpita.php?type=8"><span>Benificiary Count Report - Walpita</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Welangana.php?type=9"><span>Benificiary Count Report - Welangana</span></a></li>
				<li><a href="All-Beneficiary-Count-ReportView.php?type=10"><span>All Benificiary Count Report</span></a></li>
				<!-- <li><a href="Subsidy-Allowance-ReportView.php?type=11"><span>Subsidy Allowance Report</span></a></li> -->
    		</ul>
    	</div>
    </main>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>	
</body>
</html>