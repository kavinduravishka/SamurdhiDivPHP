<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/Benficiary-Count-ReportInc-Yatigaha.php");
?>



<!DOCTYPE html>
<html>

<head>
	<title>Benficiary Count Report Yatigaha</title>
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css" >
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>


<body>

<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php"); ?>



    <main>
      <div class="maincontainer">
      <table class="masterlist">
          <h2><span>Benificiary Count Report</span></h2>
          <h3><?php echo date("y/m/d"); ?></h3>
          <h4>District: Gampaha</h4>
          <caption><h3>Bank Zonal - Yatigaha</h3></caption>
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
          <tr><?php echo $count_list; ?></tr>
          </table>
      </div>
    </main>




</body>
</html>