<?php 

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\LFRecDB.class.php");

class LottaryFund{


//=======	Singleton   ===============
	private function __construct(){
		$this->LFRec  = new LFRecDB();
	}

	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new LottaryFund();
        }
    
        return self::$instance;
    }


//=====================================
    
	public function FundSearch($data){
		return $this->LFRec->getCount($data);
	}
	
	public function FundWrite($data){
		$this->LFRec->write($data);
	}
}

?>