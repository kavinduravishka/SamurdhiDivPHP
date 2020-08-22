<?php session_start(); 

    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer.class.php");


    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    $errors=array();

    $user_id=$_SESSION['user_id'];
    $user_name='';
    $first_name='';
    $last_name='';
    $email='';


    if(isset($_SESSION['user_id'])){

        $user_id=$_SESSION['user_id'];
        //$user_name=$_SESSION['user_name'];
        $user=Officer::getUserDetails($user_id);
        extract($user);
        
    }
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

        $user_name=$_POST['user_name'];
        $_SESSION['user_name']=$user_name;      
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
      
        if(empty($errors)){
            Officer::updateUserDetails($user_name, $first_name , $last_name , $email,$user_id);
        }
        else{
            $errors[]='Failed to modify the entry.';
        }            
             
            
        
    }
?>