<?php
require_once(include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/office2Contr/officer2.class.php"));

$officer= Officer2::getInstance();

if(isset($_POST['submit'])){



  $NIC='';
  $Name='';
  $Address='';
  $Date='';
  

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
        header('Location: LFBoard.index.php');
        exit;
    }else{
        echo "<h1>this data is already in the database</h1>";
        exit;
    }
  

}

?>

