<?php

class CBO extends Dbh{

	public function  setCBOMember($CBORegNo, $Name, $Address, $Post, $Telephone, $NIC){
		$sql = "INSERT INTO CBOMemberDetailes(CBORegNo,Name,Address,Post,Telephone,NIC) values (?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$CBORegNo, $Name, $Address, $Post, $Telephone, $NIC]);
	}

	public function setCBO($RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance){

		$DivisionalSec="Divulapitiya";
		$DistrictSec="Gampaha";

		$sql = "INSERT INTO CommunityBasedOrganizations(RegNo, Name, Address, Telephone, EMail, Village, GNDomain, Zone, DivisionalSec, DistrictSec, NoOfMemPrev, NoOfMemNew, AnnualMeetingDate, BankName, AccountNo, AccountOpenDate, Balance) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $DivisionalSec, $DistrictSec, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance]);
	}

}