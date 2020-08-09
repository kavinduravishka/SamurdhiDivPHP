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


    public function ReleaseReport(){

        $ra3500 = array("3500","3020");
        $ra2500 = array("2500","2120");
        $ra1500 = array("1500","1320","1220");
        $ra420  = array("420");


        $arrBig = array();

        $bank = '';

        array_push($arrBig,
                "Yatigaha"=>array(),
                "Badalgama"=>array(),
                "Kongodamulla"=>array(),
                "Katuwellegama"=>array(),
                "Welangana"=>array(),
                "Dunagaha"=>array(),
                "Kotadeniyawa"=>array(),
                "Divulapitiya"=>array(),
                "Walpita"=>array()
            );


    	$this->MFRelease->find($data);
    }



    public function RequestWrite($data){
    	$this->MFRequest->write($data);
    }
}

?>