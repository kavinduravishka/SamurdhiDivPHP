<?php
require_once("../dbbase.class.php");

class SSFpayDB extends Dbbase{

	public function write($data){
		$sql = "INSERT INTO SSFundPayments( Date, SerialNo, BeneficiaryNo,  BenifName, Amount, NameAssured, GNDiv,  Reason) values (?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([
				$data['Date'],          
				$data['SerialNo'],       
				$data['BeneficiaryNo'],  
				$data['BenifName'], 
				$data['Amount'],     
				$data['NameAssured'],
				$data['GNDiv'],   
				$data['Reason']
			]);
	}
	
	
}

?>