<?php

//SSF family members

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");

$OwnershipNo='';
$Name='';
$Gender='';
$MaritialState='';
$BDay='';
$Age='';
$RelToBenif='';
$Profession='';
$NIC='';
$Dead='';

if(isset($_POST['SubmitNext']) || isset($_POST['SubmitFinish'])){

    $OwnershipNo=$_POST['OwnershipNo'];
    $Name=$_POST['Name'];
    $Gender=$_POST['Gender'];
    $MaritialState=$_POST['MaritialState'];
    $BDay=$_POST['BDay'];
    $Age=$_POST['Age'];
    $RelToBenif=$_POST['RelToBenif'];
    $Profession=$_POST['Profession'];
    $NIC=$_POST['NIC'];
    $Dead=$_POST['Dead'];

    $data = array(
        'OwnershipNo'=>$_POST['OwnershipNo'],
        'Name'=>$_POST['Name'],
        'Gender'=>$_POST['Gender'],
        'MaritialState'=>$_POST['MaritialState'],
        'BDay'=>$_POST['BDay'],
        'Age'=>$_POST['Age'],
        'RelToBenif'=>$_POST['RelToBenif'],
        'Profession'=>$_POST['Profession'],
        'NIC'=>$_POST['NIC'],
        'Dead'=>$_POST['Dead']
    );

    $officer= Officer3::getInstance();
    $officer->SSFfamWrite($data);

    if(isset($_POST['SubmitFinish'])){
        header('Location: selectFormView.php');
    }else if(isset($_POST['SubmitNext'])){
        header('Location: formView.php?formid=102');
    }
    exit;
}

