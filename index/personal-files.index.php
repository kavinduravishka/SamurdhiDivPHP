<?php session_start(); ?>
<?php 
        require_once("../classes/dbh.class.php");
        require_once("../classes/officer4.class.php");
?>


<?php 
    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    $user=new Officer4();
    $search='';
    if (isset($_GET['search'])){
        
        $personalfile_list=$user->searchEntry($_GET['search']);

    }
    else{
        $personalfile_list=$user->loadPersonalFiles();
    }
    unset($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer4-dashboard</title>
    
    <link rel="stylesheet" href="../css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" >
    
    
</head>
<body>
    
    <?php require_once("../include/header.inc.php"); ?>  
    <?php 
    	$navpaths=array("Dashboard"=>"officer4-dashboard.index.php");
		require_once("../include/navbar.inc.php");
	?> 
	
	
	<main >
    <h1>Personal Files<span><a href="personal-files.index.php">| Refresh</a> </span></h1>

    <div class="search">
        <form action="personal-files.index.php" method="get">
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