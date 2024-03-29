<?php
//require_once("../dbbase.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");


class CBOorgDB extends Dbbase{
	
	

	public function write($data){

		//$DivisionalSec="Divulapitiya";
		//$DivSecNo="09";
		//$DistrictSec="Gampaha";
		//$DistSecNo="12";

		$sql = "INSERT INTO CommunityBasedOrganizations(RegNo, Name, Address, Telephone, EMail, Village, GNDomain, Zone, DivisionalSec, DistrictSec, NoOfMemPrev, NoOfMemNew, AnnualMeetingDate, BankName, AccountNo, AccountOpenDate, Balance,RenewedDate) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);


		$stmt->execute([
			$data['RegNo'], 
			$data['Name'], 
			$data['Address'], 
			$data['Telephone'], 
			$data['EMail'],
			$data['Village'], 
			$data['GNDomain'], 
			$data['Zone'], 
			$data['DivisionalSec'], 
			$data['DistrictSec'], 
			$data['NoOfMemPrev'], 
			$data['NoOfMemNew'], 
			$data['AnnualMeetingDate'], 
			$data['BankName'], 
			$data['AccountNo'], 
			$data['AccountOpenDate'], 
			$data['Balance'],
			$data['RenewedDate']
		]);
	}

	public function update($data){

		$sql = "UPDATE CommunityBasedOrganizations SET Name=? , Address=? , Telephone=? , EMail=? , Village=? , GNDomain=? , Zone=? , DivisionalSec=? , DistrictSec=? , NoOfMemPrev=? , NoOfMemNew=? , AnnualMeetingDate=? , BankName=? , AccountNo=? , AccountOpenDate=? , Balance=? ,RenewedDate=? , Expired=0 WHERE RegNo=\"{$data['RegNo']}\"";
		$stmt = $this->connect()->prepare($sql);

		$stmt->execute([ 
			$data['Name'], 
			$data['Address'], 
			$data['Telephone'], 
			$data['EMail'],
			$data['Village'], 
			$data['GNDomain'], 
			$data['Zone'], 
			$data['DivisionalSec'], 
			$data['DistrictSec'], 
			$data['NoOfMemPrev'], 
			$data['NoOfMemNew'], 
			$data['AnnualMeetingDate'], 
			$data['BankName'], 
			$data['AccountNo'], 
			$data['AccountOpenDate'], 
			$data['Balance'],
			$data['RenewedDate']
		]);
	}

	public function find($data){}
	
}

?>