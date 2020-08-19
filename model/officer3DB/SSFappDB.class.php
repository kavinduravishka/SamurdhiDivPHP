<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");

class SSFappDB extends Dbbase{

	public function write($data){
		$sql = "INSERT INTO SSFundApplicants(District, DivSec, Zone,  ForceNo, Village, GNDomain, SSOwnershipNo, Name,  Address, Successer, HomeNo, Banned ) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([
			$data['District'],  
			$data['DivSec'],
			$data['Zone'],  
			$data['ForceNo'],
			$data['Village'],
			$data['GNDomain'],
			$data['SSOwnershipNo'],
			$data['Name'],
			$data['Address'],
			$data['Successer'],
			$data['HomeNo'],
			$data['Banned']
		]);
	}
	
	public function find($data){}

	public function update($data){}
	
}

?>


  



  