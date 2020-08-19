
<?php

//Register new CBO

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer2Contr/officer2.class.php");


$RegNo='';
$Name='';
$Address='';
$Telephone='';
$EMail='';
$Village='';
$GNDomain='';
$Zone='';
$NoOfMemPrev='';
$NoOfMemNew='';
$AnnualMeetingDate='';
$BankName='';
$AccountNo='';
$AccountOpenDate='';
$Balance='';

if(isset($_POST['Submit'])){


$RegNo=$_POST['RegNo'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Telephone=$_POST['Telephone'];
$EMail=$_POST['EMail'];
$Village=$_POST['Village'];
$GNDomain=$_POST['GNDomain'];
$Zone=$_POST['Zone'];
$NoOfMemPrev=$_POST['NoOfMemPrev'];
$NoOfMemNew=$_POST['NoOfMemNew'];
$AnnualMeetingDate=$_POST['AnnualMeetingDate'];
$BankName=$_POST['BankName'];
$AccountNo=$_POST['AccountNo'];
$AccountOpenDate=$_POST['AccountOpenDate'];
$Balance=$_POST['Balance'];
$RenewedDate=$_POST['RenewedDate'];

$data=array(
    'RegNo'=>$_POST['RegNo'],
    'Name'=>$_POST['Name'],
    'Address'=>$_POST['Address'],
    'Telephone'=>$_POST['Telephone'],
    'EMail'=>$_POST['EMail'],
    'Village'=>$_POST['Village'],
    'GNDomain'=>$_POST['GNDomain'],
    'Zone'=>$_POST['Zone'],
    'NoOfMemPrev'=>$_POST['NoOfMemPrev'],
    'NoOfMemNew'=>$_POST['NoOfMemNew'],
    'AnnualMeetingDate'=>$_POST['AnnualMeetingDate'],
    'BankName'=>$_POST['BankName'],
    'AccountNo'=>$_POST['AccountNo'],
    'AccountOpenDate'=>$_POST['AccountOpenDate'],
    'Balance'=>$_POST['Balance'],
    'DivisionalSec'=>'Divulapitiya',
    'DistrictSec'=>'Gampaha',
    'RenewedDate'=>$_POST['RenewedDate']

);

$officer= Officer2::getInstance();
$officer->CBOorgWrite($data);


$_SESSION['RegNo']=$RegNo;


header('Location: formView.php?formid=002');
exit;
}

?>