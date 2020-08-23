<?php session_start(); ?>
<?php 
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");      
?>

<?php

    $officer3 = Officer3::getInstance();
    
    if(isset($_GET['q'])){
        $q=$_GET['q'];

        if($q=="ssf"){

        }else if($q=="ssffam"){

        }else if($q=="ssfpay"){

        }else if($q=="schol"){

        }else{

        }
    }else{
        
    }
		

?>