<?php 
	 echo "<input type=\"checkbox\" id=\"check\" />";

	echo "<header>
		<label for=\"check\">
        <i class=\"fas fa-bars\" id=\"sidebar_btn\"></i>
      </label>
		<div class=\"appname\">Samurdhi Division</div>
		<div class=\"loggedin\">Welcome"?> <?php echo $_SESSION['user_name']; ?> <?php echo "! <a href=\"http://localhost/SamurdhiDivPHP/view/loginView.php\" class=\"logout_btn\">Log Out</a></div>
	</header>"; 
?>

<!-- <div class="topnav">


	<div id="header-begin"></div>

	<div>
		<a id="dashboard" class="active wsopt" href="#dashboard">Dashboard</a>
  		<a id="form" class="wsopt" href="#forms">Forms</a>
  		<a id="report" class="wsopt" href="#reports">Reports</a>
	</div>
	
	<div>
		<div style="width:20px ;height:50px ; float:right"></div>
		<div class="userdiv" id="div_useroptions"> <a id="div_useroptbtn" class="useroptdrop" href="javascript:void(0)" onclick="dropmenushow();">&#9660</a> </div>
		<div class="userdiv" id="div_username"><label>UserName</label></div>
	</div> -->


</div>
 

<div id="dropmenu">
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="dmo_usrname" href="#">UserName</a></div>
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="dmo_profile" href="#">Profile</a></div>
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="dmo_files" href="#">Files</a></div>
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="logout" href="#">LogOut</a></div>
</div>



