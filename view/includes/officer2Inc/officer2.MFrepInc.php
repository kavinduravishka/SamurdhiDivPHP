<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/off23reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/MandatoryFund.class.php");

$reportfactory = new off23report();
$reportContent ="";

$mfreport = $reportfactory->anOperation(1);

$manfund=MandatoryFund::getInstance();

if(isset($_POST['Show']) || isset($_POST['Print'])){
  
    $fetcheddata=$manfund->ReleaseReport();

}

if(isset($_POST['Show'])){
    $reportContent= $mfreport->getReport($fetcheddata);
    $_SESSION['reportContent'] = $reportContent;

}else if(isset($_POST['Print'])){
    if(!isset($_SESSION['reportContent'])){
        $reportContent= $mfreport->getReport($fetcheddata);
        $_SESSION['reportContent'] = $reportContent;
    }
    $mfreport->printReport($_SESSION['reportContent']);

}

?>