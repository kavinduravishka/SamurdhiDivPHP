<?php session_start();?>


<?php require_once("../include/islogged.inc.php");
    checklogged("officer2");
 ?>

<?php

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

if(isset($_POST['Next'])){

    require_once("../classes/cbo.class.php");
    require_once("../include/yfa.inc.php");


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
    $AnnualMeetingDate=yfa($_POST['AnnualMeetingDate']);
    $BankName=$_POST['BankName'];
    $AccountNo=$_POST['AccountNo'];
    $AccountOpenDate=yfa($_POST['AccountOpenDate']);
    $Balance=$_POST['Balance'];


    $CBOrganization= new CBOrg();

    $CBOrganization->setCBO($RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance);

    $_SESSION['RegNo']=$RegNo;
   

    header('Location: CBOComityMembers.index.php');
    exit;
}

?>

<?php /*======================================================================================
==============================================================================================
==============================================================================================
==============================================================================================
==============================================================================================
=========================================================================================*/ ?>


<html>
  
    <head>
        <title>    </title>



    </head>


    <body>
      



    </body>


</html>