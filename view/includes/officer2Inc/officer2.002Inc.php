<?php 

//Add new CBO commity member

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer2Contr/officer2.class.php");
  $RegNo='';
  $Post='';
  $Name='';
  $Address='';
  $Telephone='';
  $NIC='';
  

if(!isset($_SESSION["RegNo"]) || $_SESSION["RegNo"]==''){
    echo "<h1>You can't perform this action without compleating previous steps</h1>";
    exit;
}else{

    $CBORegNo=$_SESSION['RegNo'];


    //require_once("../classes/cbo.class.php");

    $Post=$_POST['Post'];
    $Name=$_POST['Name'];
    $Address=$_POST['Address'];
    $Telephone=$_POST['Telephone'];
    $NIC=$_POST['NIC'];

    $data = array(
        'CBORegNo'=>$CBORegNo,
        'Post'=>$Post,
        'Name'=>$Name,
        'Address'=>$Address,
        'Telephone'=>$Telephone,
        'NIC'=>$NIC
    );

    
  
  //$CBOmember= new CBOrg();
  //$CBOmember->setCBOMember($RegNo, $Name, $Address, $Post, $Telephone, $NIC);
  //exit;

    if(isset($_POST['SubmitNext'])){

        $officer= Officer2::getInstance();
        $officer->CBOmemWrite($data);
        header('Location: formView.php?formid=002');
        exit;
    }
    elseif(isset($_POST['SubmitFinish'])){
        $officer= Officer2::getInstance();
        $officer->CBOmemWrite($data);
        unset($_SESSION['RegNo']);
        header('Location: dashboardView.php');
    exit;
    }

}

?>