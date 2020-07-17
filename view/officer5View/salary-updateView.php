<?php   
        //include("../view/includes/officer4Inc/personal-filesInc.php")
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/salary-updateInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer5-dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    
</head>
<body>
    
    <?php 
    //require_once("../view/includes/header.inc.php"); 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php");
    //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/officer5_sidebar.inc.php");
    ?> 

    <?php 
    	// $navpaths=array("Dashboard"=>"officer4-dashboard.index.php");
		// require_once("../include/navbar.inc.php");
	?> 
	
	
	<main >
    <h1>Salary Records<span><a href="salary-updateView.php">| Refresh</a> </span></h1>

    <div class="search">
        <form action="salary-updateView.php" method="get">
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
                    <th>Date of Appointment</th>
                    <th>Salary</th>
                    <th>Add Increment</th>
                </tr>

                <?php echo $salary_record ?>
            
            </center></table>
    </div>
    </main>
    
    
</body>
</html>