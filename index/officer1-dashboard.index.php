<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer1-dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/officer23dash.css" >
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    
    
</head>
<body>
    
    <?php require_once("../include/header.inc.php"); ?>
	
	
	<main class="officer1-dashboard">
		<div class="maincontainer maindev" >
			<div class="tbldev">
			<table >
				<tr>
					<th>
						<img src="../images/sbt.png" height=100 width=100></img>
					</th>
					<th width="700px">
						Dashboard
					</th>
				</tr>
			</table>
			</div>

			<div class="linkdev">
                <div class="adev">
                    <a href="Beneficiaries.index.php" >Beneficiaries</a>
                </div>
			</div>

			<div class="linkdev">
                <div class="adev">
                    <a href="add-beneficiary.index.php" >Add New Beneficiary</a>
                </div>
			</div>

			<div class="linkdev">
                <div class="adev">
                    <a href="Reports.index.php" >Reports</a>
                </div>
			</div>


		</div>
	</main>
    
    
</body>
</html>