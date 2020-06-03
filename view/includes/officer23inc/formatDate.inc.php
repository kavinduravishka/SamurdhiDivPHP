<?php
	function fDate($orgDate){ 
	    $date = str_replace('/', '-', $orgDate);  
	    $newDate = date("Y-m-d", strtotime($date));  
	    return $newDate;
	}
?> 
