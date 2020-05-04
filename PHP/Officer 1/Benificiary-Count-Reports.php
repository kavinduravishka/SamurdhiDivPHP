<?php session_start(); ?>
<?php require_once('inc/connection_userdb.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title>All Benificiary Count Report</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

</head>
<body>
	<?php require_once('inc/header.php') ?>
  <?php require_once('inc/sidebar.php') ?>



    <main>
    	<div class="maincontainer">
    		<!-- <table class="masterlist">
    			<h2><span>All Benificiary Count Report </span></h2>
    			<caption><h3></h3></caption>
    			<tr>
    				<th rowspan="2">Index Nnumber</th>
    				<th rowspan="2">GN Divison</th>
    				<th colspan="5">Beneficiaries</th>
    				<th rowspan="2">Total</th>
    			</tr>
    			<tr>
    				<td style="background-color: #848382; color:white;">420</td>
    				<td style="background-color: #848382; color:white;">1320</td>
    				<td style="background-color: #848382; color:white;">1220</td>
    				<td style="background-color: #848382; color:white;">2120</td>
    				<td style="background-color: #848382; color:white;">3020</td>
    			</tr>
    			 -->
    			 <ul>
    			 	<li><a href="Final-Benificiary-Count-Report.php"><span>Final Benificiary Count Report</span></a></li>
    			 	<li><SPAN>Zonal Wise</SPAN></li>
    			 	<ul>
    			 		<li><a href="Benficiary-Count-Report-Yatigaha.php "><span>Benficiary Count Report - Yatigaha </span></a></li>
    			 		<li><a href="Benficiary-Count-Report-Badalgama.php"><span>Benficiary Count Report - Badalgama</span></a> </li>
    			 		<li><a href="Benficiary-Count-Report-Koongodamulla.php"><span>Benficiary Count Report - Koongodamulla</span></a> </li>
    			 		<li><a href="Benficiary-Count-Report-Katuwelgama.php"><span>Benficiary Count Report - Katuwelgama</span></a> </li>
    			 		<li><a href="Benficiary-Count-Report-Welangana.php "><span>Benficiary Count Report - Welangana </span></a></li>
    			 		<li><a href="Benficiary-Count-Report-Dunagaha.php "><span>Benficiary Count Report - Dunagaha </span></a></li>
    			 		<li><a href="Benficiary-Count-Report-Kotadeniyawa.php"><span>Benficiary Count Report - Kotadeniyawa</span></a></li>
    			 		<li><a href="Benficiary-Count-Report-Divulapitiya.php "><span>Benficiary Count Report - Divulapitiya </span></a></li>
    			 		<li><a href="Benficiary-Count-Report-Walpita.php"><span>Benficiary Count Report - Walpita</span></a></li>
              <li><a href="All-Benificiary-Count-Report.php"><span>All Benificiary Count Report</span></a></li>
    			 </ul>

    		</table>
   		</div>
   </main>
-

</body>
</html>