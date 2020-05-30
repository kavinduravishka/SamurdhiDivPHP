<?php session_start();?>

<?php require_once("../include/islogged.inc.php");
    checklogged("officer2");
 ?>



<?php 

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

  $CBOmember= new CBOrg();

  $CBOmember->setCBOMember($RegNo, $Name, $Address, $Post, $Telephone, $NIC);
  //exit;

    if(isset($_POST['SubmitNext'])){

        header('Location: CBOComityMembers.index.php');
        exit;
    }
    elseif(isset($_POST['SubmitFinish'])){
        unset($_SESSION['RegNo']);
        header('Location: CBOBoard.index.php');
    exit;
    }

}

?>





<?php /*======================================================================================
==============================================================================================
==============================================================================================
==============================================================================================
==============================================================================================
=========================================================================================*/ ?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova">

<head>


<title>ප්‍රජාමූල සංවිධාන - Community Based Organizations</title>


<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/main_dk.css">
<link rel="stylesheet" type="text/css" href="../css/styles/navbar.css">

</head>
<body>

  <?php require_once("../include/header.inc.php"); ?>

  <?php
    $navpaths=array("Dashboard"=>"officer2-dashboard.index.php",
                    "ප්‍රජාමූල සංවිධාන"=>"CBOBoard.index.php");
    require_once("../include/navbar.inc.php");
    ?>
  

</body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>