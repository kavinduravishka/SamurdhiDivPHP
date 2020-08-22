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
    $password='';


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

        
        $password=$_POST['password'];
      
        if(empty($errors)){
            Officer::changePassword($password,$user_id);
        }
        else{
            $errors[]='Failed to modify the entry.';
        }            
             
            
        
    }
?>