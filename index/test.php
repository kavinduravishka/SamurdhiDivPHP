<html>
<head>
</head>
<body>
	<?php

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
