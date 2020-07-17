<?php session_start(); ?>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer4Contr\officer4.class.php");
?>


<?php 
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
        $user=new Officer4();
        $user->addLetterRecord($name,$date,$particulars,$punishment,$ref);
    }
    else{
        $errors[]='Failed to add the new entry.';
    }
    
    
}
?>