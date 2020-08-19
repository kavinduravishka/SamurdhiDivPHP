
<?php

//New Sipdoara  Scholarship record

require_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");

$NIC='';
$Name='';
$Gender='';
$Ethnicity='';
$Guardian='';
$SpeciallyAbled='';
$Stream='';
$School='';
$Address='';
$Bank='';
$SisurakaAcNo='';
$PeriodID='';



if(isset($_POST['Submit'])){

    $NIC=$_POST['NIC'];
    $Name=$_POST['Name'];
    $Gender=$_POST['Gender'];
    $Ethnicity=$_POST['Ethnicity'];
    $Guardian=$_POST['Guardian'];
    $SpeciallyAbled=$_POST['SpeciallyAbled'];
    $Stream=$_POST['Stream'];
    $School=$_POST['School'];
    $Address=$_POST['Address'];
    $Bank=$_POST['Bank'];
    $SisurakaAcNo=$_POST['SisurakaAcNo'];
    $PeriodID  =$_POST['PeriodID'];

    $data=array(
        'NIC'=>$_POST['NIC'],
        'Name'=>$_POST['Name'],
        'Gender'=>$_POST['Gender'],
        'Ethnicity'=>$_POST['Ethnicity'],
        'Guardian'=>$_POST['Guardian'],
        'SpeciallyAbled'=>$_POST['SpeciallyAbled'],
        'Stream'=>$_POST['Stream'],
        'School'=>$_POST['School'],
        'Address'=>$_POST['Address'],
        'Bank'=>$_POST['Bank'],
        'SisurakaAcNo'=>$_POST['SisurakaAcNo'],
        'PeriodID'  =>$_POST['PeriodID']
    );

    $officer= Officer3::getInstance();
    $officer->ScholarWrite($data);

    header('Location: selectFormView.php');
    exit;

}
?>