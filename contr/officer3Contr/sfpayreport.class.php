<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");

class sfpayreport implements Report{

  	private  $reportstuff=null;

    public function printReport($reportstuff){
        //$this->reportstuff = $this->getReport($data);
        //$this->reportstuff="<html>".$this->reportstuff."</html>";
        
        $adaptee = new MPDFAdaptee();
        $adaptee->createPDF($reportstuff);
    }

  	public function getReport($data){
  		  $stuff= $this->generateReport($data);
  		  return $stuff;
  	}

  	private function generateReport($data){
        $stuff="";

        $stuff.=<<<EOD
    <table>
    <tr>
        <th>Date</th>
        <th>Beneficiary No</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Assured by</th>
        <th>GNDivison</th>
        <th>Reason</th>
    </tr>
EOD;

        foreach($data as $row){
            $stuff.=
    "<tr>
        <td>{$row['Date']}</td>
        <td>{$row['BeneficiaryNo']}</td>
        <td>{$row['BenifName']}</td>
        <td>{$row['Amount']}</td>
        <td>{$row['NameAssured']}</td>
        <td>{$row['GNDiv']}</td>
        <td>{$row['Reason']}</td>
    </tr>";

        }
        $stuff.="</table>";

        return $stuff;
    }
    
    public function viewReport(){
      
    }

}



?>