<?php  session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
	
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
	
</head>
<body>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php"); ?>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/include/sidebar.inc.php"); ?>

 	
    <main>
    	<div class="maincontainer">
    		<ul>
    			<li><a href="Benficiary-Count-ReportView-Yatigaha.php?type=1"><span>Benificiary Count Report - Yatigaha</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Badalgama.php?type=2"><span>Benificiary Count Report - Badalgama</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Divulapitiya.php?type=3"><span>Benificiary Count Report - Divulapitiya</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Dunagaha.php?type=4"><span>Benificiary Count Report - Dunagaha</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Katuwelgama.php?type=5"><span>Benificiary Count Report - Katuwelgama</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Koongodamulla.php?type=6"><span>Benificiary Count Report - Koongodamulla</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Kotadeniyawa.php?type=7"><span>Benificiary Count Report - Kotadeniyawa</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Walpita.php?type=8"><span>Benificiary Count Report - Walpita</span></a></li>
				<li><a href="Benficiary-Count-ReportView-Welangana.php?type=9"><span>Benificiary Count Report - Welangana</span></a></li>
    		</ul>
    	</div>
    </main>s

</body>
</html>