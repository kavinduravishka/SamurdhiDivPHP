<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/CBO.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/LottaryFund.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/MandatoryFund.class.php");
// require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\off23reportfactory.class.php");
// require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\\reportfactory.class.php");

class Officer2 extends Officer{

    // private $reportfactory = new off23report();
    // private $report = null;

    private static $instance=null;

    private function  __construct(){}           //
                                                //
                                                //
    public static function getInstance()        // Singleton
    {                                           //
        if (self::$instance == null)            //
        {                                       //
            self::$instance = new Officer2(); 
                                                //
        }                                       //
                                                //
        return self::$instance;                 //
    }   
    
    protected function handleLogin($request){
        if ($request==3) {
            header('Location: http://localhost/SamurdhiDivPHP/view/officer2view/dashboardView.php');
            return TRUE;
        }
        else {
             $this->m_logger->handleLogin($request);
        }
    }

    // private function newReportInstance(){
    //     if($this->report==null){
    //         $this->report=$this->reportfactory->anOperation(1);
    //     }
    // }


    public function CBOorgWrite($data){
        $cbo=CBO::getInstance();
        $cbo->OrgWrite($data);
    }

    public function CBOmemWrite($data){
        $cbo=CBO::getInstance();
        $cbo->MemWrite($data);
        //$this->CBO->MemWrite($data);
    }

    public function LottaryFundWrite($data){
        $lfund=LottaryFund::getInstance();
        $lfund->FundWrite($data);
        //$this->LottaryFund->FundWrite($data,$NIC);
    }

    public function LFcheckifAlready($NIC){
        $lfund=LottaryFund::getInstance();
        return $lfund->checkifAlready($NIC);
    }
    
    public function MFrequestWrite($data){
        $manfun=MandatoryFund::getInstance();
        $manfun->RequestWrite($data);
    }


    //=================   REPORTS   ==================

    // private function MFreleaseReport(){
    //     $manfun=MandatoryFund::getInstance();
    //     $fetcheddata = $manfun->ReleaseReport();
    //     return $fetcheddata;
    // }

    // public function printMFreleaseReport(){
    //     $this->newReportInstance();
    //     $data = $this->MFreleaseReport();
    //     $this->report->printReport($data);
    // }

    // public function getMFreleasReport(){
    //     $this->newReportInstance();
    //     $data = $this->MFreleaseReport();
    //     $this->report->getReport($data);
    // }
}