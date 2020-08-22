<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/SocialSF.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/Scholarship.class.php");


class Officer3 extends Officer{

    //private $reportfactory = new off23report();
    //private $report = null;

    private static $instance=null;

	private function __construct(){}


    public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new Officer3();
        }
    
        return self::$instance;
    }
    

    protected function handleLogin($request){
        if ($request==4) {
            header('Location: /SamurdhiDivPHP/view/officer3view/dashboardView.php');
            return TRUE;
        }
        else {
            
             $this->m_logger->handleLogin($request);
        }
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


    //=================   REPORTS   ==================

    // public function SSFundReport($data){
    //     $socialsf=SocialSF::getInstance();
    //     $fetcheddata=$socialsf->fundReport($data);
    //     return $fetcheddata;
    // }

    // public function  printSSFundReport(){
    //     $this->newReportInstance();
    //     $data = $this->SSFundReport();
    //     $this->report->printReport($data);
    // }

    // public function getSSFundReport(){
    //     $this->newReportInstance();
    //     $data = $this->SSFundReport();
    //     $this->report->getReport($data);
    // }
}
?>