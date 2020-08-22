<?php 
session_start();
	echo "<div class=\"sidebar\">
      <center>
        <img src=\"..\images\user.jpg\" alt=\"\" class=\"profile-image\" />
        <h4>".$_SESSION['user_name']."</h4>
      </center>


      <a href=\"". $_SESSION['dashboard'] ."\"><i class=\"fas fa-desktop\"></i><span>Dashboard</span></a>

      <a href=\"add-beneficiary.index.php\"><i class=\"fas fa-cogs\"></i><span>Add New</span></a>
      <a href=\"Reports.index.php\"><i class=\"fas fa-th\"></i><span>Reports</span></a>
      <a href=\"search.index.php\"><i class=\"fas fa-search\"></i><span>Find</span></a>
      <a href=\"\"><i class=\"fas fa-info-circle\"></i><span>About</span></a>
      <a href=\"\"><i class=\"fas fa-sliders-h\"></i><span>Settings</span></a>
    </div>";
 ?>