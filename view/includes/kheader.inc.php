<div class="topnav">


	<div id="header-begin"></div>

	<div>
		<a id="dashboard" class="wsopt" href="dashboardView.php">Dashboard</a>
  		<a id="form" class="wsopt" href="selectFormView.php">Forms</a>
		<a id="report" class="wsopt" href="selectReportView.php">Reports</a>
		<a id="currenttask"><span id="currenttaskcatagory">Report</span> <span id="currenttasksep">▸</span> <span id="currenttasktask">CurrentTask some nonesendfhghsdgkh;stg;hhj;sefddhgsdhgshgdshdsggd</span></a>
	</div>
	
	<div>
		<div style="width:20px ;height:50px ; float:right"></div>
		<div class="userdiv" id="div_useroptions"> <a id="div_useroptbtn" class="useroptdrop" href="javascript:void(0)" onclick="dropmenushow();">&#9660</a> </div>
		<div class="userdiv" id="div_username"><label id="labelusername"><?php echo $_SESSION['user_name']; ?></label></div>
	</div>


</div>
 

<div id="dropmenu">
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="dmo_usrname" href=""><?php echo $_SESSION['user_name']; ?></a></div>
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="dmo_profile" href="/SamurdhiDivPHP/view/userProfileView.php">Profile</a></div>
		<!-- <div class="dropmenuopt"><a class="dropmenuoptlink" id="dmo_files" href="">Files</a></div> -->
		<div class="dropmenuopt"><a class="dropmenuoptlink" id="logout" href="/SamurdhiDivPHP/view/includes/logoutInc.php">LogOut</a></div>
</div>
