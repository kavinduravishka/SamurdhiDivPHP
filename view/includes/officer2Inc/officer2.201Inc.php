
<?php

require_once(include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/office2Contr/officer2.class.php"));



$Date ='';
$GNDomain='';
$BenefName='';
$AcceptedBy='';
$AppDate='';
$AppBank='';



if(isset($_POST['Submit'])){


$Date=$_POST['Date'];
$GNDomain=$_POST['GNDomain'];
$BenefName=$_POST['BenefName'];
$AcceptedBy=$_POST['AcceptedBy'];
$AppDate=$_POST['AppDate'];
$AppBank=$_POST['AppBank'];



$data=array(
    'Date'=>$_POST['Date'],
    'GNDomain'=>$_POST['GNDomain'],
    'BenefName'=>$_POST['BenefName'],
    'AcceptedBy'=>$_POST['AcceptedBy'],
    'AppDate'=>$_POST['AppDate'],
    'AppBank'=>$_POST['AppBank']
);
   

$officer= Officer2::getInstance();
$officer.MFrequestWrite($data);




header('Location: CBOComityMembers.index.php');
exit;
}

?>