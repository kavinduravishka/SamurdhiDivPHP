<?php session_start();?>
<?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\dbh.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\login.class.php");
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
                case 'officer5':
                    header('Location: officer4.index.php');
                    
                    break;
                
                default:
                    $errors[]='Invalid UserName/ Password';
                    break;
            }
        }
        else{
            $errors[]='Database query failed';
        }
        

        //     $user_name=mysqli_real_escape_string($connection,$_POST['user_name']);
        //     $password=mysqli_real_escape_string($connection,$_POST['password']);
        //     $hashed_password = sha1($password);

        //     $query= "SELECT * FROM user WHERE user_name='{$user_name}' AND password = '{$hashed_password}' LIMIT 1";

        //     $result_set=mysqli_query($connection,$query);

        //     if($result_set){
        //         if (mysqli_num_rows($result_set)==1){

        //             $user = mysqli_fetch_assoc($result_set);
        //             $_SESSION['user_id']=$user['id'];
        //             $_SESSION['user_name']=$user['user_name'];

        //             $query="UPDATE user SET last_login=NOW() WHERE id={$_SESSION[user_id]} LIMIT 1";

        //             $result_set=mysqli_query($connection,$query);

        //             if(!$result_set){
        //                 die("Database query failed");
        //             }
        //             header('Location: officer4.php');

        //         }
        //         else{
        //             $errors[]='Invalid UserName/ Password';
        //         }

        //     }
        //     else{
        //         $errors[]='Database query failed';
        //     }
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In - Samurdhi Division</title>
    
    <link rel="stylesheet" href="\myphp\Project\css\main.css">
    
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
