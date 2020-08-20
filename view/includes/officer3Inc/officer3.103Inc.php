
<?php

//SSF release request

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");

$Date='';
$BeneficiaryNo='';
$BenifName='';
$Amount='';
$NameAssured='';
$GNDiv='';
$Reason='';

if(isset($_POST['Submit'])){

    $Date=$_POST['Date'];
    $BeneficiaryNo=$_POST['BeneficiaryNo'];
    $BenifName=$_POST['BenifName'];
    $Amount=$_POST['Amount'];
    $NameAssured=$_POST['NameAssured'];
    $GNDiv=$_POST['GNDiv'];
    $Reason=$_POST['Reason'];

    $data=array(
        'Date'=>$_POST['Date'],
        'BeneficiaryNo'=>$_POST['BeneficiaryNo'],
        'BenifName'=>$_POST['BenifName'],
        'Amount'=>$_POST['Amount'],
        'NameAssured'=>$_POST['NameAssured'],
        'GNDiv'=>$_POST['GNDiv'],
        'Reason'=>$_POST['Reason']
    );

$officer= Officer3::getInstance();
$officer->SSFpayWrite($data);

header('Location: selectFormView.php');
exit;

}
?>