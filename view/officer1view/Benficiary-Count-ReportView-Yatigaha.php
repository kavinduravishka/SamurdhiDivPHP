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

    <script>
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Bank Zonal - Yatigaha"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of Beneficiaries"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
			{ y: <?php echo $total1;?>, label: "41-Paranahalpe" },
			{ y: <?php echo $total2;?>,  label: "41A-Paranahalpe" },
			{ y: <?php echo $total3;?>, label: "42-Halpe" },
			{ y: <?php echo $total4;?>,  label: "42A-Nariyamulla" },
			{ y: <?php echo $total5;?>,  label: "42A-Nariyamulla" },
			{ y: <?php echo $total6;?>,   label: "42A-Nariyamulla" },
			{ y: <?php echo $total7;?>,  label: "43A-Ihala-Kithulwala" },
			{ y: <?php echo $total8;?>,  label: "43B-Uthuru-Kithulwala" },
			{ y: <?php echo $total9;?>,  label: "44-Waththemulla" },
			{ y: <?php echo $total10;?>,  label: "44A-Ihala-Kithulgala" },
			{ y: <?php echo $total11;?>,  label: "44B-Pahala-Kithulgala" },
			{ y: <?php echo $total12;?>,  label: "45-Kuligedara" },
			{ y: <?php echo $total13;?>,  label: "46-Pahala-Madithiyawala" },
			{ y: <?php echo $total14;?>,  label: "46A-Pahala-Madithiyawala" },
			{ y: <?php echo $total15;?>,  label: "47-Hangawaththa" },
		]
	}]
});
chart.render();

}



</script>
</head>
<body>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php"); ?>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/include/sidebar.inc.php"); ?>
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
          <br><br><br><br><br>
          <div id="chartContainer" style="height: 350px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br><br><br><br>
    </main>
      </div>
      
    </main>
    
</body>
</html>


