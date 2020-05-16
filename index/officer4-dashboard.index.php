<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer4-dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/officer23dash.css" >
    <link rel="stylesheet" href="../css/main_dk.css">
    
    
</head>
<body>
    
    <?php require_once("../include/header.inc.php"); ?>
	
	
	<main >
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
                    <a href="personal-files.index.php" >Personal-files Log</a>
                </div>
			</div>

			<div class="linkdev">
                <div class="adev">
                    <a href="add-member.index.php" >Add New Personal-file</a>
                </div>
			</div>

			<div class="linkdev">
                <div class="adev">
                    <a href="modify-member.index.php" >Modify Personal-file</a>
                </div>
			</div>


		</div>
	</main>
    
    
</body>
</html>