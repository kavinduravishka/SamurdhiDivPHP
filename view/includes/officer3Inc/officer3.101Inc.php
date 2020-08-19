<?php

//Social security fund application

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");

$Zone='';
$ForceNo='';
$Village='';
$GNDomain='';
$SSOwnershipNo='';
$Name='';
$Address='';
$Successer='';
$HomeNo='';

if(isset($_POST['Submit'])){

    $Zone=$_POST['Zone'];
    $ForceNo=$_POST['ForceNo'];
    $Village=$_POST['Village'];
    $GNDomain=$_POST['GNDomain'];
    $SSOwnershipNo=$_POST['SSOwnershipNo'];
    $Name=$_POST['Name'];
    $Address=$_POST['Address'];
    $Successer=$_POST['Successer'];
    $HomeNo=$_POST['HomeNo'];


    $data=array(
        'District'=>'Gampaha',
        'DivSec'=>'Divulapitiya',
        'Zone'=>$_POST['Zone'],
        'ForceNo'=>$_POST['ForceNo'],
        'Village'=>$_POST['Village'],
        'GNDomain'=>$_POST['GNDomain'],
        'SSOwnershipNo'=>$_POST['SSOwnershipNo'],
        'Name'=>$_POST['Name'],
        'Address'=>$_POST['Address'],
        'Successer'=>$_POST['Successer'],
        'HomeNo'=>$_POST['HomeNo']
    );

    $officer= Officer3::getInstance();
    $officer->SSFappWrite($data);

    header('Location: selectFormView.php');
    exit;

}
?>