<?php



require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer2Contr\CBO.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer2Contr\LottaryFund.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer2Contr\MandatoryFund.class.php");

class Officer2 {

    private static $instance=null;

    private function  __construct(){}           //
                                                //
                                                //
    public static function getInstance()        // Singleton
    {                                           //
        if (self::$instance == null)            //
        {                                       //
            self::$instance = new Officer2();   //
        }                                       //
                                                //
        return self::$instance;                 //
    }                                           //





    public function CBOorgWrite($data){
        $cbo=CBO::getInstance();
        $cbo->OrgWrite($data);
    }

    public function CBOmemWrite($data){
        $cbo=CBO::getInstance();
        $cbo->MemWrite($data);
        //$this->CBO->MemWrite($data);
    }

    public function LottaryFundWrite($data,$NIC){
        $lfund=LottaryFund::getInstance();
        $lfund->FundWrite($data,$NIC);
        //$this->LottaryFund->FundWrite($data,$NIC);
    }
    
    public function MFreleaseReport(){
        $manfun=MandatoryFund::getInstance();
        $manfun->ReleaseReport();
    }

    public function MFrequestWrite($data){
        $manfun=MandatoryFund::getInstance();
        $manfun->RequestWrite($data);
    }
}