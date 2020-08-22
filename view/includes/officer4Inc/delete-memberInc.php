<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer4Contr\staff-member.class.php");
    
    if(!isset($_SESSION['user_id']) && $_SESSION['user_id']==4){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }
    
    

    if(isset($_GET['member_id'])){

        $member_id=$_GET['member_id'];        
        try{
            StaffMember::removeMember($member_id);
            header('Location:http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?msg=member_deleted');
        }
        catch(PDOException $e) {
            
            header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?msg=member_delete_failed');
        }


    }else{
        header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php');
    }
    