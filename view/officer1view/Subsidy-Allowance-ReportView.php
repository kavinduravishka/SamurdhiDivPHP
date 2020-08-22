<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/Benficiary-Count-ReportInc.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="pagedata" tab="task" type="report" title="Report - Allowance Report">
	<title>Benficiary Count Report Yatigaha</title>
	
  <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css" >
   <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    <script>

</script>
</head>
<body>
 <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
	<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/yheader.inc.php"); ?>
	 <?php include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer1Inc/officer1_sidebarInc.php"); ?>

    <main>
      <div class="maincontainer">
      <table class="masterlist">
		  <center><h2><span><u>සමුර්ධි සහනාධාර දීමනා - මුදල් සහනාධාරය </u></span></h2></center>
		  <br><br>
          <h3>ප්‍රාදේශීය ලේකම් කාර්යාලය - දිව්ලපිටිය </h3>
          <h3><?php echo date("y/m/d") ; ?></h3>
          <tr>
            <th rowspan="3">අනු අංකය </th>
            <th rowspan="3">දිවි නැගුම ප්‍රජාමූල බැංකු </th>
            <th colspan="8">අදාල දීමනා වර්ගයට අයත් ප්‍රතිලබීන් ගණන </th>
            <th rowspan="3">එකතුව</th>
          </tr>
          <tr>
            <th colspan="4" style="background-color: #848382; color:white;">1500</th>
            <th colspan="2" style="background-color: #848382; color:white;">2500</th>
            <th colspan="2" style="background-color: #848382; color:white;">3500</th>
            <!-- <td style="background-color: #848382; color:white;">2120</td>
            <td style="background-color: #848382; color:white;">3020</td> -->
          </tr>
          <tr>
            <td></td>
            <td>1320/=</td>
            <td></td>
            <td>1220/=</td>
            <td>2120/=</td>
            <td></td>
            <td>3020/=</td>
          </tr>
          <tr><?php echo $count_list; ?></tr>
          </table>
		  
          <br><br><br>

 
		<form action="Subsidy-Allowance-ReportView.php?type=11" method="post">
			<center><button class="submit pdf-button" name="submit">Make PDF</button></center>
		</form>
    <br><br><br><br>
         
    </main>
      </div>
      
    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>	
</body>
</html>


