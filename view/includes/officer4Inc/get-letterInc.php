<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer4Contr/appreciation_letter_report.class.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/appLetterfactory.class.php");
?>
<?php 
    $report_data="";
    $search='';

    
    
    if (isset($_GET['search']))
    {
        
        //$input_data=$_GET['search'];
        $reportFac=new AppreciationLetterReportFactory();
        $report=$reportFac->anOperation(1);        
        $report_data=$report->viewReport();

    
        if(isset($_POST['submit']))
        {       
            $report->printReport($report_data);
        }
    }
?>