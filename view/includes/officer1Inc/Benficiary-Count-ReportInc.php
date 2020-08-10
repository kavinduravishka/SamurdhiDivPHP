<?php session_start(); 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/bcreportfactory.class.php");
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
  $type = $_GET['type'];
  $fac = new BCReportFactory();
  $report = $fac->anOperation($type);
  $count_list = $report->ViewReport();
  if(isset($_POST['submit'])){
    $report->printReport('yasindu dilshan');
  }