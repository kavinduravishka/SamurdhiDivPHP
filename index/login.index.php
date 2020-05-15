<?php session_start();?>
<?php 
    require_once("../classes/dbh.class.php");
    require_once("../classes/login.class.php");
?>
<?php
    if(isset($_POST['submit'])){

        
        $errors=array();

        if ( !(isset($_POST['user_name'])) || strlen(trim($_POST['user_name']))<1  ){
            $errors[]='UserName is invalid/ Missing';
        }

        if(!(isset($_POST['password'])) || strlen(trim($_POST['password']))<1 ){
            $errors[]='Password is invalid/ Missing';
        }
    

        if (empty($errors)){
            $user_name=$_POST['user_name'];
            $pwd=$_POST['password'];

            $user_login=new Login();
            $user=$user_login->verifyUser($user_name,$pwd);
            extract($user);

            switch ($_SESSION['user_name']) {
                
                case 'officer1' :
                    header('Location: home-officer1.index.php');
                    
                    break;

                case 'officer2':
                    header('Location: officer2.index.php');
                    
                    break;

                case 'officer3':
                    header('Location: officer3.index.php');
                    
                    break;

                case 'officer4':
                    header('Location: officer4-dashboard.index.php');
                    break;

                case 'officer5':
                    header('Location: officer5.index.php');
                
                default:
                    $errors[]='Invalid UserName/ Password';
                    break;
            }
        }
        else{
            $errors[]='Database query failed';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In - Samurdhi Division</title>
    
    <link rel="stylesheet" href="\SamurdhiDivPHP\css\main_dk.css">
    
</head>
<body>
    <div class="login">

        <form action="login.index.php" method="post">
            
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
    </div>
</body>
</html>
