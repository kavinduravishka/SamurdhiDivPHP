<?php 
	
	echo "<input type=\"checkbox\" id=\"check\" />";



	echo "<header>
		<label for=\"check\">
        <i class=\"fas fa-bars\" id=\"sidebar_btn\"></i>
      </label>
		<div class=\"appname\">Department of Samurdhi Development</div>
		<div class=\"loggedin\">Welcome"?> <?php echo $_SESSION['first_name']; ?> <?php echo "! <a href=\"logout.php\" class=\"logout_btn\">Log Out</a></div>
	</header>"; ?>


