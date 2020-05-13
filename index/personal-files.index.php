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
    <title>Personal File Modifications</title>
    
    
</head>
<body>
    <header>
        <div class="appname">Samurdhi Division</div>
        <div class="loggedin">Welcome <?php echo $_SESSION['user_name']; ?>! <a href="logout.index.php">Log Out</a></div>

        <link rel="stylesheet" href="\SamurdhiDivPHP\css\main_dk.css">
    </header>


    <main>
        <h1>Personal File Details<span><a href="add-member.index.php"> + Add New</a></span></h1>

        <!--<p id="backDashboard">
            <input type="submit" name="back" value="< Back to Dashboard">                          
        </p>-->

        <p id="backDashboard">
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">< Back to Dashboard</button>
                          
        </p>

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