<?php session_start(); ?>
<?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php"); 
// require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\dbh.class.php");
// require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\staff-member.class.php");

require_once("../classes/dbh.class.php");
require_once("../classes/staff-member.class.php");
   

?>
<?php 

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    

    if(isset($_GET['member_id'])){

        $member_id=$_GET['member_id'];        
        try{
            StaffMember::removeMember($member_id);
            header('Location: officer4-dashboard.index.php?msg=member_deleted');
        }
        catch(PDOException $e) {
            //echo $sql . "<br>" . $e->getMessage();
            header('Location: officer4-dashboard.index.php?msg=member_delete_failed');
        }


    }else{
        header('Location: officer4-dashboard.index.php');
    }
