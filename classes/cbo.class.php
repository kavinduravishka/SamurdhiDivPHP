<?php

require_once("dbh.class.php");


function returnError($stmt){
    $errors = $stmt->errorInfo();
    echo "<h5>".$errors[2]."</h5>";
    echo "<br>";
    echo "<h5>".$errors[2]."</h5>";
    echo "<br>";
    echo "<h5>".$errors[2]."</h5>";
    exit;
}


class CBOrg extends Dbh{

	public function  setCBOMember($CBORegNo, $Name, $Address, $Post, $Telephone, $NIC){
		$sql = "INSERT INTO CBOMemberDetailes(CBORegNo,Name,Address,Post,Telephone,NIC,Expired) values (?,?,?,?,?,?,0)";
		$stmt = $this->connect()->prepare($sql);

		try{
			$stmt->execute([$CBORegNo, $Name, $Address, $Post, $Telephone, $NIC]);
		}catch(Exception $e){
			returnError($stmt);
		}
		
	}

	public function setCBO($RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance){

		$DivisionalSec="Divulapitiya";
		$DistrictSec="Gampaha";

		$RenewedDate= date("Y-m-d");

		$sql = "INSERT INTO CommunityBasedOrganizations(RegNo, Name, Address, Telephone, EMail, Village, GNDomain, Zone, DivisionalSec, DistrictSec, NoOfMemPrev, NoOfMemNew, AnnualMeetingDate, BankName, AccountNo, AccountOpenDate, Balance,RenewedDate,Expired) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,0)";
		$stmt = $this->connect()->prepare($sql);

		try{
			$stmt->execute([$RegNo, $Name, $Address, $Telephone, $EMail, $Village, $GNDomain, $Zone, $DivisionalSec, $DistrictSec, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance, $RenewedDate]);
		}catch(Exception $e){
			returnError($stmt);
		}

		
	}

}