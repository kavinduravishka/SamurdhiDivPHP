<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");

class mfreport implements Report{


	public function printReport($reportstuff){


	  	$adaptee = new MPDFAdaptee();
	  	$adaptee->createPDF($reportstuff);
  	}


  	public function getReport($data){
  		$stuff= $this->generateReport($data);
  		return $stuff;
  	}


  	private function generateReport($data){
		  $stuff="";

		  $stuff.='
		<style>
		  	.reporttbl td{
				border:1px solid black;
				border-collapse: collapse;
				padding:5px;
			}

			.reporttbl th{
				border:1px solid black;
				border-collapse: collapse;
				padding:5px;
				background-color:#ccc;
			}

			.reporttbl{
                margin-left:auto;
				margin-right:auto;
				border:1px solid black;
				border-collapse: collapse;
				padding:5px;
            }
		</style>
<table class="reporttbl">
  <tr>
    <th rowspan="3">Serial<br>No<br></th>
    <th rowspan="3">Samurdhi<br>CB bank</th>
    <th colspan="9">benificiaries</th>
  </tr>
  <tr>
    <td colspan="2">420</td>
    <td colspan="2">1500</td>
    <td colspan="2">2500</td>
    <td colspan="2">3500</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>240</td>
    <td></td>
    <td>100</td>
    <td></td>
    <td>200</td>
    <td></td>
    <td>300</td>
    <td></td>
  </tr>

';


		$sum420=0;
		$sum1500=0;
		$sum2500=0;
		$sum3500=0;

		$amount420=0;
		$amount1500=0;
		$amount2500=0;
		$amount3500=0;

		$totalreleases=0;

		$serialno=1;

		foreach($data as $bank){

			$sum420+=$bank['420'];
			$sum1500+=$bank['1500'];
			$sum2500+=$bank['2500'];
			$sum3500+=$bank['3500'];

			$a420=$bank['420']*240;
			$a1500=$bank['1500']*100;
			$a2500=$bank['2500']*200;
			$a3500=$bank['3500']*300;

			$amount420+=$bank['420']*240;
			$amount1500+=$bank['1500']*100;
			$amount2500+=$bank['2500']*200;
			$amount3500+=$bank['3500']*300;

			$sumofamounts=$bank['420']*240+
							$bank['1500']*100+
							$bank['2500']*200+
							$bank['3500']*300;

			$totalreleases+=$sumofamounts;

			$stuff.=
			"<tr>
				<td>{$serialno}</td>
				<td>{$bank['bankname']}</td>
				<td>{$bank['420']}</td>
				<td>{$a420}</td>
				<td>{$bank['1500']}</td>
				<td>{$a1500}</td>
				<td>{$bank['2500']}</td>
				<td>{$a2500}</td>
				<td>{$bank['3500']}</td>
				<td>{$a3500}</td>
				<td>{$sumofamounts}</td>
			</tr>";

			$serialno+=1;
		}

		$stuff.=
			"<tr>
				<td></td>
				<td></td>
				<td>{$sum420}</td>
				<td>{$amount420}</td>
				<td>{$sum1500}</td>
				<td>{$amount1500}</td>
				<td>{$sum2500}</td>
				<td>{$amount2500}</td>
				<td>{$sum3500}</td>
				<td>{$amount3500}</td>
				<td>{$totalreleases}</td>
			</tr>";


		$stuff.='</table>';
		  
		return $stuff;
	}
	  
	public function viewReport(){
		
	}

}



?>