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
    $personalfile_list=$user->loadPersonalFiles();
    unset($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer4-dashboard</title>
    
    <link rel="stylesheet" href="../css/main_dk.css">
    
    
</head>
<body>
    
    <?php require_once("../include/header.inc.php"); ?>
	
	
	<center><main >
		<div class="maincontainer" >
		<h1>Personal Files</h1>
		<table class="personalfile_list">

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
        
        </table>
    </center></main>
    
    
</body>
</html>