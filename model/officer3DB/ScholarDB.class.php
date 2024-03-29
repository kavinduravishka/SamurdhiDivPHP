<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");
	
class ScholarDB extends Dbbase{


	public function write($data){

		$sql = "INSERT INTO SipdoraScholarship(NIC, Name, Gender, Ethnicity,  Guardian,  SpeciallyAbled,  Stream,  School,  Address,  Bank, SisurakaAcNo, PeriodID) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([
			$data['NIC'], 
			$data['Name'], 
			$data['Gender'], 
			$data['Ethnicity'],
			$data['Guardian'], 
			$data['SpeciallyAbled'], 
			$data['Stream'], 
			$data['School'], 
			$data['Address'], 
			$data['Bank'], 
			$data['SisurakaAcNo'], 
			$data['PeriodID']
		]);
		   
	}

	public function find($data){}

	public function update($data){}
	
}

?>