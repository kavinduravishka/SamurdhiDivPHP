<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");

	
class LFRecDB extends Dbbase{
	
	public function  write($data){
		

		$sql = "INSERT INTO LottaryFundRecord(NIC, Name, Address, Date) values (?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([ $data['NIC'], $data['Name'], $data['Address'], $data['Date'] ]);

	}

	public function getCount($NIC){

		$sql = "SELECT COUNT(NIC) AS prevcount FROM LottaryFundRecord WHERE NIC = ?";
		$stmt = $this->connect()->prepare($sql);

		$stmt->execute([$NIC]);

		$previousRecords = $stmt->fetchAll();
		//echo "<script>console.log('".$previousRecords['prevcount']."') ; </script>";
		return $previousRecords[0]['prevcount'];
		
	}

	public function find($data){}

	public function update($data){}

}

?>