<?php
require_once("../dbh.class.php");
	
class MFReqDB extends Dbh{
	
	public function  setMFR($SerialNo, $Date, $GNDomain, $BenefName, $AcceptedBy, $AppDate, $AppBank){
		$sql = "INSERT INTO MandatoryFundRequests(SerialNo, Date, GNDomain, BenefName, AcceptedBy, AppDate, AppBank) values (?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$SerialNo, $Date, $GNDomain, $BenefName, $AcceptedBy, $AppDate, $AppBank]);
	}
	
}

?>