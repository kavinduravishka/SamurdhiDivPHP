<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFRelREP.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFReqDB.class.php");

class MandatoryFund{

    private static $instance=null;
    
	private function __construct(){
		$this->MFRelease  = new MFRelREP();
        $this->MFRequest  = new MFReqDB();
	}

//==============   Singleton   =====================
	public static function getInstance()
    {
        

        if (self::$instance == null)
        {
        self::$instance = new MandatoryFund();
        }
    
        return self::$instance;
    }

//==================================================


    public function ReleaseReport($data){
    	$this->MFRelease->write($data);
    }

    public function RequestWrite($data){
    	$this->MFRequest->write($data);
    }
}

?>