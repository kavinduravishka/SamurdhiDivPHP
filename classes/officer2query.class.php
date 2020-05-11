<?php 

class Offcer2query extends Dbh {

	public function  setCBOMember($CBORegNo, $Name, $Address, $Post, $Telephone, $NIC){
		$sql = "INSERT INTO CBOMemberDetailes(CBORegNo,Name,Address,Post,Telephone,NIC) values (?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$CBORegNo, $Name, $Address, $Post, $Telephone, $NIC]);
	}

	public function setCBO($RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance){

		$DivisionalSec="Divulapitiya";
		//$DivSecNo="09";
		$DistrictSec="Gampaha";
		//$DistSecNo="12";

		$sql = "INSERT INTO CommunityBasedOrganizations(RegNo, Name, Address, Telephone, EMail, Village, GNDomain, Zone, DivisionalSec, DistrictSec, NoOfMemPrev, NoOfMemNew, AnnualMeetingDate, BankName, AccountNo, AccountOpenDate, Balance) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$RegNo, $Name, $Address, $Telephone, $EMail,$Village, $GNDomain, $Zone, $DivisionalSec, $DistrictSec, $NoOfMemPrev, $NoOfMemNew, $AnnualMeetingDate, $BankName, $AccountNo, $AccountOpenDate, $Balance]);
	}

	public function  setMFR($SerialNo, $Date, $GNDomain, $BenefName, $AcceptedBy, $AppDate, $AppBank){
		$sql = "INSERT INTO MandatoryFundRequests(SerialNo, Date, GNDomain, BenefName, AcceptedBy, AppDate, AppBank) values (?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$SerialNo, $Date, $GNDomain, $BenefName, $AcceptedBy, $AppDate, $AppBank]);
	}

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

	public function getMFRDetailes(){

		$arrBig = array();

		$arrYatigaha = array();
		$arrBadalgama = array();
		$arrKongodamulla = array();
		$arrKatuwellegama = array();
		$arrWelangana = array();
		$arrDunagaha = array();
		$arrKotadeniyawa = array();
		$arrDivulapitiya = array();
		$arrWalpita = array();

		$bank = '';

		$sql = "SELECT COUNT(*) FROM detailsofbenificiaries WHERE Relief_Amount = ? and Bank_Zonal = ? and is_deleted = 0";

		$stmt = $this->connect()->prepare($sql);

		$bank = 'Yatigaha';

		//fill later

		array_push($arrBig,
				"Yatigaha"=>$arrYatigaha,
				"Badalgama"=>$arrBadalgama,
				"Kongodamulla"=>$arrKongodamulla,
				"Katuwellegama"=>$arrKatuwellegama,
				"Welangana"=>$arrWelangana,
				"Dunagaha"=>$arrDunagaha,
				"Kotadeniyawa"=>$arrKotadeniyawa,
				"Divulapitiya"=>$arrDivulapitiya,
				"Walpita"=>$arrWalpita);


	}
	
	
}