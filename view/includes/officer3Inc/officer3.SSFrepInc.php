<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/off23reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/SocialSF.class.php");

$reportfactory = new off23report();
$reportContent ="";

$ssfreport = $reportfactory->anOperation(2);

$socialsf=SocialSF::getInstance();

if(isset($_POST['Show']) || isset($_POST['Print'])){
    $data=array(
        'year'=>$_POST['year'],
        'month'=>$_POST['month']
    );

    $fetcheddata=$socialsf->fundReport($data);

}

if(isset($_POST['Show'])){
    $reportContent= $ssfreport->getReport($fetcheddata);
    $_SESSION['reportContent'] = $reportContent;

}else if(isset($_POST['Print'])){
    $ssfreport->printReport($_SESSION['reportContent']);

}

?>