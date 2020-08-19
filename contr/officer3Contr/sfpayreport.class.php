<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");

class sfpayreport implements Report{

  	private  $reportstuff=null;

    public function printReport($data){
        if($this->reportstuff==null){
            $this->reportstuff = $this->getReport($data);
        }

        $adaptee = new MPDFAdaptee();
        $adaptee->createPDF($this->reportstuff);
    }


  	public function getReport($data){
  		  $stuff= $this->generateReport($data);
  		  return $stuff;
  	}


  	private function generateReport($data){

    }
    
    public function viewReport(){
      
    }

}



?>