<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\payreport.class.php");
    //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");
?>
<?php 

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    //$errors=array();

    $report_data="";


    if(isset($_GET['emp_no'])){

        $emp_no=$_GET['emp_no'];
        $report=new PayReport();        
        $report_data=$report->viewReport();
        
        
        
    }
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

        $report=new PayReport();        
        $report_data=$report->viewReport();
        $report->printReport($report_data);

    }
?>