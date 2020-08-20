<?php
//require_once("../dbbase.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");


class CBOmemDB extends Dbbase{
	
	//public function  write($CBORegNo, $Name, $Address, $Post, $Telephone, $NIC){

	public function  write($data){
		$sql = "INSERT INTO CBOMemberDetailes(CBORegNo,Name,Address,Post,Telephone,NIC) values (?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([
			$data['CBORegNo'], 
			$data['Name'], 
			$data['Address'], 
			$data['Post'], 
			$data['Telephone'], 
			$data['NIC']
		]);
	}

	public function find($data){

	}

	public function update($data){
		
	}
}

?>