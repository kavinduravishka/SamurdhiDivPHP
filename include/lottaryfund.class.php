<?php

require_once("dbh.class.php");

class LOF extends Dbh{

	public function  setLFRecord($CBORegNo, $Name, $Address, $Post, $Telephone, $NIC){
		$sql = "INSERT INTO CBOMemberDetailes(CBORegNo,Name,Address,Post,Telephone,NIC,Expired) values (?,?,?,?,?,?,0)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$CBORegNo, $Name, $Address, $Post, $Telephone, $NIC]);
	}


	public function  checkOldRecord($NIC){
		$sql = "SELECT COUNT(*) from LottaryFundRecord"
	}


}