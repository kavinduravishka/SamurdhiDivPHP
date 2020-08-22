<?php
function checklogged($authuser){
	if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']=='0' || $_SESSION['logged_in']==''){
		header('Location: login.index.php');
		exit;
	}

	elseif (!isset($_SESSION['user_name']) || $_SESSION['user_name']=='' || $_SESSION['user_name']!=$authuser){
		header("HTTP/1.1 401 Unauthorized");
		include("unautherized.inc.php");
		exit;
	}

}

?>