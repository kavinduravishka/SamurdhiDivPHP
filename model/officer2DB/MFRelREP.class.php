<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");
	
class MFRelREP extends Dbbase{

	public function find($data){

		$sql = "SELECT COUNT(*) as count FROM detailsofbenificiaries WHERE Relief_Amount = ? and Bank_Zonal = ? and is_deleted = 0";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([ $data['Relief_Amount'], $data['Bank_Zonal'] ]);
		$fetchedData = $stmt->fetchAll();
		return $fetchedData;

	}

	public function  update($data){}

	public function  write($data){}
	
}


?>