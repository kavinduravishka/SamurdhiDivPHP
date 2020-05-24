<?php 
	
	//echo "<input type=\"checkbox\" id=\"check\" />";



	echo "<header>
		

		<div class=\"appname\">Samurdhi Division</div>
		<div class=\"loggedin\">Welcome"?> <?php echo $_SESSION['user_name'];?>


<?php 

	echo "! <a href=\"http://localhost/SamurdhiDivPHP/view/includes/logoutInc.php\" class=\"logout_btn\">Log Out</a></div></header>"; 
	
	
?>
