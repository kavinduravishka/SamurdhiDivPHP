<?php 

require_once(include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/office2Contr/officer2.class.php"));

  $Post='';
  $Name='';
  $Address='';
  $Telephone='';
  $NIC='';
  

if(!isset($_SESSION["RegNo"]) || $_SESSION["RegNo"]==''){
    echo "<h1>You can't perform this action without compleating previous steps</h1>";
    exit;
}else{

    $RegNo=$_SESSION['RegNo'];


    require_once("../classes/cbo.class.php");

    $Post=$_POST['Post'];
    $Name=$_POST['Name'];
    $Address=$_POST['Address'];
    $Telephone=$_POST['Telephone'];
    $NIC=$_POST['NIC'];

    $data = array(
        'Post'=>$Post,
        'Name'=>$Name,
        'Address'=>$Address,
        'Telephone'=>$Telephone,
        'NIC'=>$NIC
    );

    $officer= Officer2::getInstance();
    $officer.CBOmemWrite($data);
  
  //$CBOmember= new CBOrg();
  //$CBOmember->setCBOMember($RegNo, $Name, $Address, $Post, $Telephone, $NIC);
  //exit;

    if(isset($_POST['SubmitNext'])){

        header('Location: formView.php?formid=002');
        exit;
    }
    elseif(isset($_POST['SubmitFinish'])){
        unset($_SESSION['RegNo']);
        header('Location: dashboardView.php');
    exit;
    }

}

?>