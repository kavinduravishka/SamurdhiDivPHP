<?php session_start(); 

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer4Contr\officer4.class.php");

if(!isset($_SESSION['user_id']) && $_SESSION['user_id']!=4){
    header('Location: /SamurdhiDivPHP/view/loginView.php');
}

$errors=array();

$name='';
$date='';
$particulars='';
$punishment='';
$ref='';


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $date=$_POST['date'];
    $particulars=$_POST['particulars'];
    $punishment=$_POST['punishment'];
    $ref=$_POST['ref'];

    $req_fields=array('name','date','particulars','punishment','ref');

    foreach ($req_fields as $field){
        if(empty(trim($_POST[$field]))){
            $errors[]=$field .' is required';
        }
    }

    if(empty($errors)){
        $user=Officer4::getInstance();
        $user->addLetterRecord($name,$date,$particulars,$punishment,$ref);
    }
    else{
        $errors[]='Failed to add the new entry.';
    }
    
    
}
?>