<?php  
    function rDate($orgDate){  
	    $newDate = date("d-m-Y", strtotime($orgDate));  
	    $date = str_replace('-', '/', $newDate);
	    return $date;
	 }  
?> 