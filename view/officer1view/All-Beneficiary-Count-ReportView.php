<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/Benficiary-Count-ReportInc.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Benficiary Count Report</title>
	
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css" >
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    <script>

</script>
</head>
<body>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php"); ?>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/include/sidebar.inc.php"); ?>
    <main>
      <div class="maincontainer">
      <table class="masterlist">
		  <center><h2><span><u>සමුර්ධි සහනාධාර දීමනා බැංකු උපරිම වාර්තාව </u></span></h2></center>
		  <br><br>
          <h3><?php echo date("y/m/d") ; ?></h3>
		  <h3>ප්‍රාදේශීය ලේකම් කොට්ඨාශය - දිව්ලපිටිය </h3>
          <tr>
            <th rowspan="2">අනු අංකය </th>
            <th rowspan="2">සමුර්ධි බැංකුව </th>
            <th colspan="5">අදාල දීමනා වර්ගයට අයත් ප්‍රතිලබීන් ගණන </th>
            <th rowspan="2">එකතුව </th>
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
      
    </main>
    
</body>
</html>

