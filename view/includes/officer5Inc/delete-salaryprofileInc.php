<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");
?>
<?php 

    if(!isset($_SESSION['user_id']) && $_SESSION['user_id']==5){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }
    

    if(isset($_GET['emp_no'])){

        $emp_no=$_GET['emp_no'];        
        try{
            Officer5::removeSalaryProfile($emp_no);
            header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php?msg=salary_profile_deleted');
        }
        catch(PDOException $e) {
            
            header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php?msg=salary_profile_delete_failed');
        }


    }else{
        header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php');
    }
