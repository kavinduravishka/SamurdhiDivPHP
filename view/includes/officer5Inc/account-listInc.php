<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\payreport.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\\reportfactory.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\payreportfactory.class.php");
?>
<?php 

    $report_data="";


    if(isset($_GET['bank'])){

        $bank=$_GET['bank'];
        $reportFac=new PayReportFactory();
        $report=$reportFac->anOperation('54');        
        $report_data=$report->viewReport();
        
        
        
    
    // else{
    //     header('Location: officer4-dashboard.index.php?err=query_failed');
    // }

    if(isset($_POST['submit'])){

       
        $report->printReport($report_data);

    }}
?>