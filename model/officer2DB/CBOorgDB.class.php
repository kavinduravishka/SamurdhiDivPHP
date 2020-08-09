<?php
require_once("../dbbase.class.php");
	
class CBOorgDB extends Dbbase{
	
	

	public function write($data){

		//$DivisionalSec="Divulapitiya";
		//$DivSecNo="09";
		//$DistrictSec="Gampaha";
		//$DistSecNo="12";

		$sql = "INSERT INTO CommunityBasedOrganizations(RegNo, Name, Address, Telephone, EMail, Village, GNDomain, Zone, DivisionalSec, DistrictSec, NoOfMemPrev, NoOfMemNew, AnnualMeetingDate, BankName, AccountNo, AccountOpenDate, Balance) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
			$data['Balance']
		]);
	}
	
}

?>