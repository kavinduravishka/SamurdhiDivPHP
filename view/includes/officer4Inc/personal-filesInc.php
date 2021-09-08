<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer4Contr/officer4.class.php");
        
    if($_SESSION['user_id']!=4){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }

    $user=Officer4::getInstance();
    $search='';
    if (isset($_GET['search'])){
        
        $personalfile_list=$user->searchEntry($_GET['search']);

    }
    else{
        $personalfile_list=$user->loadPersonalFiles();
    }
    

?>