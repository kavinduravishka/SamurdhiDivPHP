<?php session_start(); ?>
<?php 
        //require_once("../contr/officer4Contr/officer4.class.php");
		require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/officer1.class.php");
	// 	if($_SESSION['user_id']!=1){
    //     header('Location: /SamurdhiDivPHP/view/loginView.php');
    // }
          
?>

<?php

	$search = '';

	$officer1 = Officer1::getInstance();
		if(isset($_GET['search'])){
			$search = $_GET['search'];
			$beneficiaryList = $officer1->searchBeneficiary($search);
		}else{
		    $beneficiaryList = $officer1->loadBeneficiaries();
		}

?>
