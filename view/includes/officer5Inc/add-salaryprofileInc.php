<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }

    
    
    $errors=array();

    $emp_no='';
    $name='';
    $designation='';
    $bank='';
    $acc_no='';
    $basic_salary='';
    $interim_allo='';
    $language_allo='';
    $living_cost='';
    $w_op='';
    $agrahara='';
    $stamp='';
    $union='';
    $other_loan='';
    $special_advance='';
    $net_pay='';

    if(isset($_POST['calculate'])){
        $basic_salary=$_POST['basic_salary'];
        $interim_allo=$_POST['interim_allo'];
        $language_allo=$_POST['language_allo'];
        $living_cost=$_POST['living_cost'];
        $w_op=$_POST['w_op'];
        $agrahara=$_POST['agrahara'];
        $stamp=$_POST['stamp'];
        $union=$_POST['union'];
        $other_loan=$_POST['other_loan'];
        $special_advance=$_POST['special_advance'];

        $req_fields=array('basic_salary','interim_allo','language_allo','living_cost','w_op','agrahara','stamp','union','other_loan','special_advance');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }

        if(empty($errors)){
            $officer= Officer5::getInstance();
            $net_pay=$officer->calculateNetPayment($basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance);
        }
        else{
            $errors[]='Failed to calculate the net payment.';
        }


    }

    if(isset($_POST['submit'])){

        $emp_no=$_POST['emp_no'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $bank=$_POST['bank'];
        $acc_no=$_POST['acc_no'];
        $basic_salary=$_POST['basic_salary'];
        $interim_allo=$_POST['interim_allo'];
        $language_allo=$_POST['language_allo'];
        $living_cost=$_POST['living_cost'];
        $w_op=$_POST['w_op'];
        $agrahara=$_POST['agrahara'];
        $stamp=$_POST['stamp'];
        $union=$_POST['union'];
        $other_loan=$_POST['other_loan'];
        $special_advance=$_POST['special_advance'];
        //$net_pay=$_POST['name'];

        $req_fields=array('emp_no','name','designation','bank','acc_no','basic_salary','interim_allo','language_allo','living_cost','w_op','agrahara','stamp','union','other_loan','special_advance');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }

        if(empty($errors)){
            $officer= Officer5::getInstance();
            $officer->addSalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance);
        }
        else{
            $errors[]='Failed to add the new entry.';
        }
        
        
    }
?>