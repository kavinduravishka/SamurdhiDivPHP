<?php
require_once("../dbh.class.php");
	
class MFRelREP extends Dbh{

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

		//$bank = 'Yatigaha';

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

?>