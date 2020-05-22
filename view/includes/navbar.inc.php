<?php

	echo "<div>";
	echo "<nav>";

	foreach($navpaths as $key=>$path){
		echo "<div class=\"navdev\">";
			echo "<a href=\"".$path."\">".$key."</a>";
		echo "</div>";
		//echo "<br>";
		echo "<div class=\"navdev\">";
			echo ">";
		echo "</div>";

	}

	echo "</nav>";
	echo "</div>";
	
