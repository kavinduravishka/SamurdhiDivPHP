<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/SSFappDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/SSFfamDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/SSFpayDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/SSFundREP.class.php");

class SocialSF{

    private static $instance = null;

	private function __construct(){
        $this->ssfapp = new SSFappDB();
        $this->ssffam = new SSFfamDB();
        $this->ssfpay = new SSFpayDB();
        $this->ssfundrep = new SSFundREP();
    }


	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new SocialSF();
        }
    
        return self::$instance;
    }


    public function appWrite($data){
        $this->ssfapp->write($data);
    }

    public function famWrite($data){
        $this->ssffam->write($data);
    }

    public function payWrite($data){
        $this->ssfpay->write($data);
    }

    public function fundReport($data){
        $fetchedData = $this->ssfundrep->find($data);

        return $fetchedData;
    }
    
}
 
?>