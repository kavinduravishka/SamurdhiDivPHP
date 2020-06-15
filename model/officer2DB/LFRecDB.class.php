<?php
require_once("../dbh.class.php");
	
class LFRecDB extends Dbh{
	
	public function  setLottaryFund($NIC, $Name, $Address, $Date){
		$sql = "INSERT INTO LottaryFundRecord(NIC, Name, Address, Date) values (?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$NIC, $Name, $Address, $Date]);
	}

	public function getLottaryFund($NIC){
		$sql = "SELECT COUNT(NIC) FROM LottaryFundRecord WHERE NIC = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$NIC]);
		$previousRecords = $stmt->fetch();
		return $previousRecords;
	}

}

?>