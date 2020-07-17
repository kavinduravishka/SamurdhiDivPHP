<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFRelDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFReqDB.class.php");

class MandatoryFund{


	private function __construct(){
		$this->MFRelease  = new MFRelDB();
        $this->MFRequest  = new MFReqDB();
	}

	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new MandatoryFund();
        }
    
        return self::$instance;
    }

    public function ReleaseWrite($data){
    	$this->MFRelease->write($data);
    }

    public function RequestWrite($data){
    	$this->MFRequest->write($data);
    }
}
?>