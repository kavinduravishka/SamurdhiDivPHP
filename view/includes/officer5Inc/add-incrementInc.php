<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }

    
    
    $errors=array();

    $nic_number='';
    $name='';
    $date_appointed='';
    $salary='';
    $last_increment='';
    $increment='';

    if(isset($_GET['nic_number'])){

        $member_id=$_GET['nic_number'];        
        $req_member=(new Officer5())->getSalaryRecord($nic_number);
        extract($req_member);
        
    }


    if(isset($_POST['submit'])){

        $nic_number=$_POST['nic_number'];
        $name=$_POST['name'];
        $date_appointed=$_POST['date_appointed'];
        $salary=$_POST['salary'];
        $last_increment=$_POST['last_increment'];
        $increment=$_POST['increment'];

        $req_fields=array('nic_number','name','date_appointed','salary','increment');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }

        if(empty($errors)){
            $officer=new Officer5();
            $officer->addIncrement($nic_number,$salary,$increment);
        }
        else{
            $errors[]='Failed to add the new entry.';
        }
        
        
    }
?>