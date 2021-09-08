<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");

class sfpayreport implements Report{

  	private  $reportstuff=null;

    public function printReport($reportstuff){
        
        $adaptee = new MPDFAdaptee();
        $adaptee->createPDF($reportstuff);
    }

  	public function getReport($data){
  		  $stuff= $this->generateReport($data);
  		  return $stuff;
  	}

  	private function generateReport($data){

        
        //$dat = DateTime::createFromFormat("Y-m-d",$data[0]['Date']);
        //$dt = $dat->format("Y-m");

        $dt = date('Y-m', strtotime($data[0]['Date']));
        $stuff="";

        $stuff.=<<<EOD
    	<style>
		  	table,td,th{
			border:1px solid black;
			border-collapse: collapse;
			padding:5px;
            }
            
            table{
                margin-left:auto;
                margin-right:auto;
            }
        </style>
        <h3 style="text-align:center">සමෘද්ධි සමාජ ආරක්ෂණ අරමුදල  - මාසික වාර්තාව</h3>
        <p style="margin-left:15%">{$dt} මාසය</p>
    <table>
    <tr>
        <th>දිනය</th>
        <th>ප්‍රථිලාභී අංකය</th>
        <th>නම</th>
        <th>මුදල</th>
        <th>අනුමත කල අය</th>
        <th>ග්‍රාම නිලධාරී වසම</th>
        <th>හේතුව</th>
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