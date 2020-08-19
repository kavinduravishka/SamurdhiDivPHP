<?php session_start();

    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\payreport.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\\reportfactory.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\payreportfactory.class.php");

    $report_data="";
    $reportFac=new PayReportFactory();
    $report=$reportFac->anOperation('52');        
    $report_data=$report->viewReport();

    if(isset($_POST['submit'])){       
        $report->printReport($report_data);
    }
?>