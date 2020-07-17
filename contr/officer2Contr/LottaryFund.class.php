<?php 

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\LFRecDB.class.php");

class LottaryFund{

	public function __construct(){
		$this->LFRec  = new LFRecDB();
	}

	public function FundSearch($NIC){
		$this->LFRec->search($NIC);
	}

	public function FundWrite($data){
		$this->LFRec->write($data);
	}
}

?>