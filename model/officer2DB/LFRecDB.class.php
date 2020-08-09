<?php
require_once("../dbbase.class.php");
	
class LFRecDB extends Dbbase{
	
	public function  write($data){
		

		$sql = "INSERT INTO LottaryFundRecord(NIC, Name, Address, Date) values (?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([ $data['NIC'], $data['Name'], $data['Address'], $data['Date'] ]);

	}

	private function getCount($NIC){

		$sql = "SELECT COUNT(NIC) AS prevcount FROM LottaryFundRecord WHERE NIC = ?";
		$stmt = $this->connect()->prepare($sql);

		$stmt->execute([$NIC]);

		$previousRecords = $stmt->fetch();
		return $previousRecords['prevcount'];
	}

}

?>