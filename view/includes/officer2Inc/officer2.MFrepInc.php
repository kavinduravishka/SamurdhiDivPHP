<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/off23reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/MandatoryFund.class.php");

$reportfactory = new off23report();
$reportContent ="";

$mfreport = $reportfactory->anOperation(1);

$manfund=MandatoryFund::getInstance();

if(isset($_POST['Show']) || isset($_POST['Print'])){
    // $data=array(
    //     'year'=>$_POST['year'],
    //     'month'=>$_POST['month']
    // );

    $fetcheddata=$manfund->ReleaseReport();

}

if(isset($_POST['Show'])){
    //echo "<h1>Show set</h1>";
    $reportContent= $mfreport->getReport($fetcheddata);
    //echo "<h1>".gettype($reportContent)."</h1>";
    $_SESSION['reportContent'] = $reportContent;

}else if(isset($_POST['Print'])){
    //echo "<h1>".gettype($_SESSION['reportContent'])."</h1>";
    $mfreport->printReport($_SESSION['reportContent']);

}

?>