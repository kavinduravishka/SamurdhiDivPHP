<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer4Contr\staff-member.class.php");
?>
<?php 

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    $errors=array();

    $member_id='';
    $nic_number='';
    $name='';
    $designation='';
    $service='';
    $date_appointed='';
    $date_of_birth='';
    $date_of_pension='';
    $w_op_number='';
    $member_type='';


    if(isset($_GET['member_id'])){

        $member_id=$_GET['member_id'];        
        $req_member=StaffMember::getMember($member_id);
        extract($req_member);
        switch ($member_type) {
            case 'in':
                $member_type="Inside Officer";
                break;
            case 'out':
                $member_type="Field Officer";
                break;
            
            default:
                # code...
                break;
        }
        
    }
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

        $member_id=$_POST['member_id'];
        $nic_number=$_POST['nic_number'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $service=$_POST['service'];
        $date_appointed=$_POST['date_appointed'];
        $date_of_birth=$_POST['date_of_birth'];
        $date_of_pension=$_POST['date_of_pension'];
        $w_op_number=$_POST['w_op_number'];
        $member_type=$_POST['member_type'];
        switch ($member_type) {
            case 'Inside Officer':
                $member_type="in";
                break;
            case 'Field Officer':
                $member_type="out";
                break;
            
            default:
                # code...
                break;
        }

        $req_fields=array('nic_number','name','designation','service','date_appointed','date_of_birth','date_of_pension','w_op_number');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }

        $max_len_fields=array('nic_number'=>12,'name'=>100,'designation'=>100,'service'=>50,'w_op_number'=>7);

        foreach ($max_len_fields as $field=>$max_len){
            if(strlen(trim($_POST[$field]))>$max_len){
                $errors[]=$field .' must be less than ' .$max_len .'characters';
            }
        }
      
        if(empty($errors)){
            $sMember=new StaffMember($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number,$member_type);
            $sMember->updateMember($member_id);
        }
        else{
            $errors[]='Failed to modify the entry.';
        }            
             
            
        
    }
?>