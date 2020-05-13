<?php session_start();?>
<?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php"); 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\dbh.class.php");
    
?>
<?php
    if(!isset($_SESSION['user_id'])){
        header('Location: login.index.php');
    }


    if(isset($_POST['personalfile'])){
        header('Location: personal-files.index.php');
    }

    elseif(isset($_POST['report'])){
        header('Location: personal-reports.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Officer4 - Samurdhi Division</title>
    <link rel="stylesheet" href="\myphp\Project\css\main.css">
</head>
<body>
    <header>
        <div class= "appname">Samurdhi Division</div>
        <div class="loggedin">Welcome <?php echo $_SESSION['user_name'];?>!<a href="logout.index.php">Log Out</a></div>
    </header>

    <main>
    <div class="officer4_dashboard">
        <form action="officer4.index.php" method="post">

            <h1>Officer4 Dashboard</h1>
            <p>
                <input type="submit" name="personalfile" value="Personal File Modifications">
            </p>
            <p>
                <input type="submit" name="report" value="Issue Reports">
            </p>

        </form>
    </div>
    </main>
</body>
</html>