<?php 
	//require_once("../contr/login.class.php");
	require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\login.class.php");
    
?>

<?php 
	$user_login=new Login();
	$user_login->logOut();

 ?>

