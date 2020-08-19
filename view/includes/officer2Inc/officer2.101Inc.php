<?php

//Record new lottary fund

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer2Contr/officer2.class.php");

$officer= Officer2::getInstance();

$NIC='';
$Name='';
$Address='';
$Date='';


if(isset($_POST['submit'])){
  $NIC=$_POST['NIC'];
  $Name=$_POST['Name'];
  $Address=$_POST['Address'];
  $Date=$_POST['Date'];

    $data=array(
        'NIC'=>$_POST['NIC'],
        'Name'=>$_POST['Name'],
        'Address'=>$_POST['Address'],
        'Date'=>$_POST['Date']
    );

    if($officer->LFcheckifAlready($NIC)==0){
        //$LFund->setLFRecord($NIC, $Name, $Address, $Date);
        $officer->LottaryFundWrite($data);
        header('Location: dashboardView.php');
        exit;
    }else{
        echo "<h1>this data is already in the database</h1>";
        exit;
    }
  

}

?>

