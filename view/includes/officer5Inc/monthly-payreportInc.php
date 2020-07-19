<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");
    //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");
?>
<?php 

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    $errors=array();

    $month='';
    $description='';
    $emp_no='';
    $name='';
    $designation='';
    $basic_salary='';
    $interim_allo='';
    $language_allo='';
    $living_cost='';
    $gross_pay='';
    $w_op='';
    $agrahara='';
    $stamp='';
    $union='';
    $other_loan='';
    $special_advance='';
    $net_pay='';


    if(isset($_GET['emp_no'])){

        $emp_no=$_GET['emp_no'];        
        $req_profile=Officer5::getSalaryProfile($emp_no);
        extract($req_profile);
        
        
        
    }
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

        $emp_no=$_POST['emp_no'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $basic_salary=$_POST['basic_salary'];
        $interim_allo=$_POST['interim_allo'];
        $language_allo=$_POST['language_allo'];
        $living_cost=$_POST['living_cost'];
        $gross_pay=$_POST['gross_pay'];
        $w_op=$_POST['w_op'];
        $agrahara=$_POST['agrahara'];
        $stamp=$_POST['stamp'];
        $union=$_POST['union'];
        $other_loan=$_POST['other_loan'];
        $special_advance=$_POST['special_advance'];
        $net_pay=$_POST['net_pay'];

        $month=$_POST['month'];
        $description=$_POST['description'];

        $req_fields=array('month','description');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }
      
        if(empty($errors)){
            
            $report->printReport($report_data);
        }
        else{
            $errors[]='Failed to print the report.';
        }            
             
            
        
    }
?>