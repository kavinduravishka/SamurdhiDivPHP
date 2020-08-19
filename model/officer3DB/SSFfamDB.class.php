<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");

class SSFfamDB extends Dbbase{

	public function write($data){
		$sql = "INSERT INTO SSFAppFamMem( OwnershipNo,  Name,  Gender,  MaritialState,  BDay,  Age,  RelToBenif,  Profession, NIC, Dead) values (?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([
				 $data['OwnershipNo'],  
				 $data['Name'],  
				 $data['Gender'],  
				 $data['MaritialState'],  
				 $data['BDay'],  
				 $data['Age'],  
				 $data['RelToBenif'],  
				 $data['Profession'], 
				 $data['NIC'], 
				 $data['Dead']
			]);
	}
	
	public function find($data){}

	public function update($data){}
	
}

?>