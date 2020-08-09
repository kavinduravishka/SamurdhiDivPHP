<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer3Contr\SocialSF.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer3Contr\Scholarship.class.php");


class Officer3{


	private function __construct(){}


    public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new Officer3();
        }
    
        return self::$instance;
    }

    public function ScholarWrite($data){
    	$scholar=Scholarship::getInstance();
    	$scholar->ScholarWrite($data);
    }

    public function SSFappWrite($data){
        $socialsf=SocialSF::getInstance();
        $socialsf->appWrite($data);
    }

    public function SSFfamWrite($data){
        $socialsf=SocialSF::getInstance();
        $socialsf->famWrite($data);
    }

    public function SSFpayWrite($data){
        $socialsf=SocialSF::getInstance();
        $socialsf->payWrite($data);
    }

    public function SSFundReport($data){
        $socialsf=SocialSF::getInstance();
        $socialsf->fundReport($data);
    }

}
?>