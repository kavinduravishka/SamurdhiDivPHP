<?php session_start();

    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\payreport.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\\reportfactory.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\payreportfactory.class.php");

    if($_SESSION['user_id']!=5){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }

    $report_data="";


    if(isset($_GET['bank'])){

        $bank=$_GET['bank'];
        $reportFac=new PayReportFactory();
        $report=$reportFac->anOperation('53');        
        $report_data=$report->viewReport();
        
        
        
    
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

       
        $report->printReport($report_data);

    }}
?>