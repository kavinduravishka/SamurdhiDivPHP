<?php
require_once("../dbh.class.php");
	
class MFRelREP extends Dbbase{

	public function find($data){

		

		$sql = "SELECT COUNT(*) FROM detailsofbenificiaries WHERE Relief_Amount = ? and Bank_Zonal = ? and is_deleted = 0";

		$stmt = $this->connect()->prepare($sql);

		$stmt->execute([ $data['Relief_Amount'], $data['Bank_Zonal'] ]);

		$fetchedData = $stmt->fetchAll();

		return $fetchedData;

		

	}
	
}

?>