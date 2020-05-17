<?php

require_once("dbh.class.php");
require_once("../include/yfa.inc.php");

class LOF extends Dbh{

	public function  setLFRecord($NIC, $Name, $Address, $Date){
		$sDate=yfa($Date);
		$sql = "INSERT INTO CBOMemberDetailes(NIC,Name,Address,Date) values (?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$NIC, $Name, $Address, $sDate]);
	}

}