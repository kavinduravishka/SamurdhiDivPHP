<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer3DB\SSFappDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer3DB\SSFfamDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer3DB\SSFpayDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer3DB\SSFundREP.class.php");

class SocialSF{

    private static $instance = null;

	private function __construct(){
        
    }


	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new SocialSF();
        }
    
        return self::$instance;
    }


    public function 
}
 
?>