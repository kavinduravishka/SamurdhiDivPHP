<html>
<head>
</head>
<body>
	<?php
	//require_once("../include/yfa.inc.php");

	//$a=array("year"=>"2020","month"=>"04","day"=>"13");

	//echo yfa($a);
	session_start();
		echo '<h1>This content is still under development</h1>';
		echo '<pre>';
		print_r($_POST); 
		echo '<br>';
		print_r($_SESSION);
		echo '</pre>';

	//session_destroy();
	?>
</body>
</html> 
