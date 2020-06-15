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
        $sMember=new StaffMember($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number,$member_type);
        $sMember->addMember();
    }
    else{
        $errors[]='Failed to add the new entry.';
    }
    
    
}
?>