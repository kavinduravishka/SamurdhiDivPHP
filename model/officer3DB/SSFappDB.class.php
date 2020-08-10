<?php
require_once("../dbbase.class.php");

class SSFappDB extends Dbbase{

	public function write($data){
		$sql = "INSERT INTO SSFundApplicants(District, DivSec, Zone,  ForceNo, Village, NDomain, SSOwnershipNo, Name,  Address, Successer, HomeNo, Banned ) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([
			$data['District'],  
			$data['DivSec'],
			$data['Zone'],  
			$data['ForceNo'],
			$data['Village'],
			$data['NDomain'],
			$data['SSOwnershipNo'],
			$data['Name'],
			$data['Address'],
			$data['Successer'],
			$data['HomeNo'],
			$data['Banned']
		]);
	}
	
	
}

?>


  



  