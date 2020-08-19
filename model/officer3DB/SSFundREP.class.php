<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbbase.class.php");
class SSFundREP extends Dbbase{
	
	public function find($data){
		$sql = "SELECT * from SSFundPayments where Expired = 0 and year(Date)= ? and month(Date) = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([ $data['year'], $data['month'] ]);
		$fetchedData = $stmt->fetchAll();
		return $fetchedData;		
	}

	public function write($data){}

	public function update($data){}
	
	
}

?>