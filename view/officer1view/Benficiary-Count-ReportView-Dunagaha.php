<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/Benficiary-Count-ReportInc.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="pagedata" tab="task" type="report" title="Report - Dunugaha">
	<title>Benficiary Count Report Dunugaha</title>
	
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
		  <center><h2><span><u>සමුර්ධි සහනාධාර දීමනා බැංකු උපරිම වාර්තාව </u></span></h2></center>
		  <br><br>
          <h3><?php echo date("y/m/d") ; ?> (සහනාධාර මුදල් බැර කිරීම සඳහා)</h3>
          <h4>දිස්ත්‍රික්කය :- ගම්පහ </h4>
		  <h3>ප්‍රාදේශීය ලේකම් කාර්යාලය - දිව්ලපිටිය </h3>
          <caption><h3>සමුර්ධි ප්‍රජාමූල බැංකුවේ නම :- දුනගහ</h3></caption>
          <tr>
            <th rowspan="2">අනු අංකය </th>
            <th rowspan="2">වසමේ නම </th>
            <th colspan="5">දාල දීමනා වර්ගයට අයත් ප්‍රතිලබීන් ගණන </th>
            <th rowspan="2">මුළු ප්‍රතිලාභීන් ගණන</th>
          </tr>
          <tr>
            <td style="background-color: #848382; color:white;">420</td>
            <td style="background-color: #848382; color:white;">1320</td>
            <td style="background-color: #848382; color:white;">1220</td>
            <td style="background-color: #848382; color:white;">2120</td>
            <td style="background-color: #848382; color:white;">3020</td>
          </tr>
          <tr><?php echo $count_list; ?></tr>
          </table>
		  
          <br><br><br>

 
		<form action="Benficiary-Count-ReportView-Yatigaha.php" method="post">
			<center><button class="submit pdf-button" name="submit">Make PDF</button></center>
		</form>
    <br><br><br><br>
         
    </main>
      </div>
      <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>	
    </main>
    
</body>
</html>


<!-- ඉහල විස්තරය නිවැරදි බවට සහතික කරමි.
සකස් කළේ :- .................................
විෂය භාර කළමනාකරණ සහකාර 
වසම් උපරිමය අනුව ඉහත විස්තරය නිවැරදි බව සහතික කරමි.
පරීක්ෂා කළේ :- ............................
සමුර්ධි මුලස්ථාන කළමනාකරු.

ඉහත තොරතුරු නිවැරදි බවට සහතික කරමි.
.................................
ප්‍රාදේශීය ලේකම් ,
දිව්ලපිටිය. -->

