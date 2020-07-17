<?php session_start();?>
<?php 
   
    //require_once("../contr/login.class.php");
    require_once(__DIR__."/../../contr/login.class.php");
    
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

            $user_login=Login::getInstance();
            $user=$user_login->verifyUser($user_name,$pwd);
            extract($user);

            switch ($_SESSION['user_name']) {
                
                case 'officer1' :
                    header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php');
                    // $_SESSION['dashboard']='officer1-dashboard.index.php';
                    // $_SESSION['logged_in']='1';
                    
                    break;

                case 'officer2':
                    //header('Location: '.realpath($_SERVER["DOCUMENT_ROOT"].'/SamurdhiDivPHP/view/officer2view/officer2-dashboard.index.php'));
                    header('Location: http://localhost/SamurdhiDivPHP/view/officer2view/officer2-dashboard.index.php');
                    //$_SESSION['dashboard']='officer2-dashboardView.php';
                    //$_SESSION['logged_in']='1';
                    //$_SESSION['user_name']='officer2';
                    
                    break;

                case 'officer3':
                    //header('Location: '.realpath($_SERVER["DOCUMENT_ROOT"].'/SamurdhiDivPHP/view/officer3view/officer3-dashboard.index.php'));
                    header('Location: http://localhost/SamurdhiDivPHP/view/officer3view/officer3-dashboard.index.php');
                    //$_SESSION['dashboard']='officer3-dashboardView.php';
                    //$_SESSION['logged_in']='1';
                    //$_SESSION['user_name']='officer3';
                    
                    break;

                case 'officer4':
                    header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php');
                    // $_SESSION['dashboard']='officer4-dashboard.index.php';
                    // $_SESSION['logged_in']='1';
                    //$_SESSION['user_name']='Officer4';
                    break;

                case 'officer5':
                    header('Location: officer5.index.php');
                    $_SESSION['dashboard']='officer5.index.php';
                    $_SESSION['logged_in']='1';
                    //$_SESSION['user_name']='officer5';
                
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