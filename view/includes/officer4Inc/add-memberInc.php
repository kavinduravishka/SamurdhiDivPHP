<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer4Contr\staff-member.class.php");

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }

    
    
    $errors=array();

    $nic_number='';
    $name='';
    $designation='';
    $service='';
    $date_appointed='';
    $date_of_birth='';
    $date_of_pension='';
    $salary='';
    $w_op_number='';


    if(isset($_POST['submit'])){

        $nic_number=$_POST['nic_number'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $service=$_POST['service'];
        $date_appointed=$_POST['date_appointed'];
        $date_of_birth=$_POST['date_of_birth'];
        $date_of_pension=$_POST['date_of_pension'];
        $w_op_number=$_POST['w_op_number'];
        $salary=$_POST['salary'];
        $member_type=$_POST['member_type'];

        $req_fields=array('nic_number','name','designation','service','date_appointed','date_of_birth','date_of_pension','salary','w_op_number');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }

        $max_len_fields=array('name'=>100,'designation'=>100,'service'=>50,'w_op_number'=>7);

        foreach ($max_len_fields as $field=>$max_len){
            if(strlen(trim($_POST[$field]))>$max_len){
                $errors[]=$field .' must be less than ' .$max_len .'characters';
            }
        }

        if(empty($errors)){
            $sMember=new StaffMember($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number,$salary,$member_type);
            $sMember->addMember();
        }
        else{
            $errors[]='Failed to add the new entry.';
        }
        
        
    }
?>