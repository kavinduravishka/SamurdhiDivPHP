<?php session_start(); ?>
<?php 
        //require_once("../contr/officer4Contr/officer4.class.php");
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");

    if(!isset($_SESSION['user_id']) && $_SESSION['user_id']!=5){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }

    $user=Officer5::getInstance();
    $search='';
    if (isset($_GET['search'])){
        
        $salary_record=$user->searchEntry($_GET['search']);

    }
    else{
        $salary_record=$user->loadSalaryFiles();
    }
    

?>