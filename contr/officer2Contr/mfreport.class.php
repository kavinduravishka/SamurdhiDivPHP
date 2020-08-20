<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");

class mfreport implements Report{

	// private  $reportstuff=null;
	// private  $prevdata = array();

	public function printReport($reportstuff){
		// if($data!=$this->prevdata){
		// 	$this->getReport($data);
		// }

	  	$adaptee = new MPDFAdaptee();
	  	$adaptee->createPDF($reportstuff);
  	}


  	public function getReport($data){
  		$stuff= $this->generateReport($data);
  		if($stuff!=$this->reportstuff){
  			$this->reportstuff = $stuff;
  		}
  		return $stuff;
  	}


  	private function generateReport($data){
		  
  		
	}
	  
	public function viewReport(){
		
	}

}



?>