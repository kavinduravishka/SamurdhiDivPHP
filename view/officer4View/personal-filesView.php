<?php   
        //include("../view/includes/officer4Inc/personal-filesInc.php")
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/personal-filesInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer4-dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <!--
    <link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" >
    -->
    
</head>
<body>
    
    <?php 
    //require_once("../view/includes/header.inc.php"); 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php");
    ?> 

    <?php 
    	// $navpaths=array("Dashboard"=>"officer4-dashboard.index.php");
		// require_once("../include/navbar.inc.php");
	?> 
	
	
	<main >
    <h1>Personal Files<span><a href="personal-filesView.php">| Refresh</a> </span></h1>

    <div class="search">
        <form action="personal-filesView.php" method="get">
            <p>
            <input type="text" name="search" id="" placeholder="Type NIC or Name and Press Enter" value="<?php echo $search?>" autofocus required>
            </p>
        </form>
    </div>

    <div class="maincontainer" >		
            <center><table class="personalfile_list">

                <tr>
                    <th>NIC Number</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Service</th>
                    <th>Date of Appointment</th>
                    <th>Date of Birth</th>
                    <th>Date of Pension</th>
                    <th>No. of W & OP</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php echo $personalfile_list ?>
            
            </center></table>
    </div>
    </main>
    
    
</body>
</html>