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
		$sql = "SELECT * FROM CBOMemberDetailes WHERE CBORegNo = \"{$data["CBORegNo"]}\" and Deleted=0 AND Expired=0";
		$stmt = $this->connect()->query($sql);
		$mems = $stmt->fetchAll();
		return $mems;
	}

	public function update($data){
		
	}

	public function deleteOldmem($data){
		$sql = "UPDATE CBOMemberDetailes SET Deleted=1 , Expired=1 WHERE CBORegNo=\"{$data['CBORegNo']}\"";
		$stmt = $this->connect()->exec($sql);
	}

}

?>