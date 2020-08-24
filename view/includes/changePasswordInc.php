<?php session_start(); 

    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");


    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    $errors=array();

    $user_id=$_SESSION['user_id'];
    $user_name='';
    $first_name='';
    $last_name='';
    $email='';
    $old_password='';
    $new_password='';
    $re_new_password='';


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

        
        $old_password=$_POST['old_password'];
        $new_password=$_POST['new_password'];
        $re_new_password=$_POST['re_new_password'];
             
        if(empty($errors)){
            if( (Officer::checkChangePassword($user_id,$old_password))  and ($new_password===$re_new_password) ){
                Officer::changePassword($new_password,$user_id);
            }
            else{
                $errors[]='Passwords does not match.';
            }
        }
        else{
            $errors[]='Failed to change the password.';
        }            
             
            
        
    }
?>