<?php
require_once("../dbh.class.php");
	
class MFReqDB extends Dbbase{
	
	//public function  setMFR($SerialNo, $Date, $GNDomain, $BenefName, $AcceptedBy, $AppDate, $AppBank){

	public function  write($data){
		$sql = "INSERT INTO MandatoryFundRequests(SerialNo, Date, GNDomain, BenefName, AcceptedBy, AppDate, AppBank) values (?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([ $data['SerialNo'], $data['Date'], $data['GNDomain'], $data['BenefName'], $data['AcceptedBy'], $data['AppDate'], $data['AppBank'] ]);
	}
	
}

?>