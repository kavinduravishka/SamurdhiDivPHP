<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\payreport.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\\reportfactory.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\payreportfactory.class.php");
    //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");
?>
<?php 

if(!isset($_SESSION['user_id']) && $_SESSION['user_id']!=5){
    header('Location: /SamurdhiDivPHP/view/loginView.php');
}
    
    //$errors=array();

    $report_data="";


    if(isset($_GET['emp_no'])){

        $emp_no=$_GET['emp_no'];
        $reportFac=new PayReportFactory();
        $report=$reportFac->anOperation('51');        
        $report_data=$report->viewReport();
        
        
        
    
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

       
        $report->printReport($report_data);

    }}
?>