<?php 
//include("../view/includes/loginInc.php")
//include_once("../view/includes/loginInc.php");

session_start();

include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/loginInc.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In - Samurdhi Division</title>
    
    <link rel="stylesheet" href="/SamurdhiDivPHP/view/css/main_dk.css">
    
    
</head>
<body class=loginpage>
    <div class="login">

        <form action="loginView.php" method="post">
            
                
                <legend><h1>Log In</h1></legend>

                <?php 
                    if( isset($errors) && !empty($errors) ){
                        echo '<p class="error">Invalid Username / Password</p>';
                    }
                ?>

                <?php 
                    if(isset($_GET['logout'])){
                        echo '<p class="info">You have successfull logged out from the system</p>';
                    }
                ?>                

                <p>
                    UserName:
                </p>
                <input type="text" name="user_name" id="" placeholder="User Name">
                

                <p>
                    Password:
                </p>
                <input type="password" name="password" id="" placeholder="Password">
                

                
                <input type="submit" name="submit" value="Log In">

            
            
        </form>
    </dev>
</body>
</html>
