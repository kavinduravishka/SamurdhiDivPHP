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

if(!isset($_SESSION['OwnershipNo'])){
    $_SESSION['OwnershipNo']=$_POST['SSOwnershipNo'];
}
if(isset($_POST['SubmitNext']) || isset($_POST['SubmitFinish'])){

    $Zone=$_POST['Zone'];
    $ForceNo=$_POST['ForceNo'];
    $Village=$_POST['Village'];
    $GNDomain=$_POST['GNDomain'];
    $SSOwnershipNo=$_POST['SSOwnershipNo'];
    $Name=$_POST['Name'];
    $Address=$_POST['Address'];
    $Successer=$_POST['Successer'];
    $HomeNo=$_POST['HomeNo'];

    $Banned='0';


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
        'HomeNo'=>$_POST['HomeNo'],
        'Banned'=>$Banned
    );

    $officer= Officer3::getInstance();
    $officer->SSFappWrite($data);


    if(isset($_POST['SubmitFinish'])){
        header('Location: selectFormView.php');
    }else if(isset($_POST['SubmitNext'])){
        header('Location: formView.php?formid=102');
    }
    exit;

}
?>