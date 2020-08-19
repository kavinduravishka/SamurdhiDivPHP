
<?php

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer2Contr/officer2.class.php");

$SerialNo='';
$Date ='';
$GNDomain='';
$BenefName='';
$AcceptedBy='';
$AppDate='';
$AppBank='';

if(isset($_POST['Submit'])){

    $SerialNo=$_POST['SerialNo'];
    $Date=$_POST['Date'];
    $GNDomain=$_POST['GNDomain'];
    $BenefName=$_POST['BenefName'];
    $AcceptedBy=$_POST['AcceptedBy'];
    $AppDate=$_POST['AppDate'];
    $AppBank=$_POST['AppBank'];

    $data=array(
        'SerialNo'=>$_POST['SerialNo'],
        'Date'=>$_POST['Date'],
        'GNDomain'=>$_POST['GNDomain'],
        'BenefName'=>$_POST['BenefName'],
        'AcceptedBy'=>$_POST['AcceptedBy'],
        'AppDate'=>$_POST['AppDate'],
        'AppBank'=>$_POST['AppBank']
    ); 

    $officer= Officer2::getInstance();
    $officer->MFrequestWrite($data);

    header('Location: selectFormView.php');
    exit;
}

?>