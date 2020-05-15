<?php session_start(); ?>
<?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php"); 
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\dbh.class.php");
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\officer4.class.php");

?>


<?php 
    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    if(isset($_POST['submit'])){
         header('Location: officer4.php');
    }

    $user=new Officer4();
    $personalfile_list=$user->loadPersonalFiles();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer4-dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link rel="stylesheet" href="../css/main_dk.css">
    
    
</head>
<body>
    
    <?php require_once("../include/header.inc.php"); ?>
	<?php require_once("../include/sidebar_officer4.inc.php"); ?>
	
	
	<main >
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
	</main>
</body>
</html>