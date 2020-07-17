<?php
require_once("../dbbase.class.php");
	
class CBOorgDB extends Dbbase{
	
	public function write($RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $DivisionalSec, $DistrictSec, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance){

		//$DivisionalSec="Divulapitiya";
		//$DivSecNo="09";
		//$DistrictSec="Gampaha";
		//$DistSecNo="12";

		$sql = "INSERT INTO CommunityBasedOrganizations(RegNo, Name, Address, Telephone, EMail, Village, GNDomain, Zone, DivisionalSec, DistrictSec, NoOfMemPrev, NoOfMemNew, AnnualMeetingDate, BankName, AccountNo, AccountOpenDate, Balance) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $DivisionalSec, $DistrictSec, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance]);
	}
	
}

?>