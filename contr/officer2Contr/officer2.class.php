<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/CBO.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/LottaryFund.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/MandatoryFund.class.php");
// require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\off23reportfactory.class.php");
// require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\\reportContr\\reportfactory.class.php");

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer2DB/officer2DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer2DB/CBOmemDB.class.php");


class Officer2 extends Officer{

    // private $reportfactory = new off23report();
    // private $report = null;

    private static $instance=null;

    private function  __construct(){}           
                                                
                                                
    public static function getInstance()        
    {                                           
        if (self::$instance == null)            
        {                                       
            self::$instance = new Officer2(); 
                                                
        }                                       
                                                
        return self::$instance;                 
    }   
    
    protected function handleLogin($request){
        if ($request==2) {
            header('Location: /SamurdhiDivPHP/view/officer2view/dashboardView.php');
            exit;
        }
        else {
             $this->m_logger->handleLogin($request);
        }
    }


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


    //=================   DASHBOARD   ==================

    public function loadCBO(){
        $cbos = (Officer2DB::getInstance())->loadCBO();
        $cbolist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>RegNo</th>
                <th>Name</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>EMail</th>
                <th>Village</th>
                <th>GN Domain</th>
                <th>Zone</th>
                <th>Annual Meeting Date</th>
                <th>Bank Name</th>
                <th>Renewed Date</th>
            </tr>
EOD;
        foreach ($cbos as $cbo) {
            $cbolist.=<<<EDO
            <tr>
                <td>{$cbo['RegNo']}</td>
                <td>{$cbo['Name']}</td>
                <td>{$cbo['Address']}</td>
                <td>{$cbo['Telephone']}</td>
                <td>{$cbo['EMail']}</td>
                <td>{$cbo['Village']}</td>
                <td>{$cbo['GNDomain']}</td>
                <td>{$cbo['Zone']}</td>
                <td>{$cbo['AnnualMeetingDate']}</td>
                <td>{$cbo['BankName']}</td>
                <td>{$cbo['RenewedDate']}</td>
                <td><a href="#">Commity members</a></td>
            </tr>
EDO;
        }

        $cbolist.="</table>";

        return $cbolist;
    }

//=====================================================================

    public function selectCBOmem($regno){
        $cbomems = (Officer2DB::getInstance())->selectCBOmem($regno);
        $cbomemlist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>CBORegNo</th>
                <th>Name</th>
                <th>Post</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>NIC</th>
            </tr>
EOD;
            
        foreach ($cbomems as $cbomem) {
            $cbomemlist.=<<<EDO
            <tr>
                <td>{$cbomem['CBORegNo']}</td>
                <td>{$cbomem['Name']}</td>
                <td>{$cbomem['Post']}</td>
                <td>{$cbomem['Address']}</td>
                <td>{$cbomem['Telephone']}</td>
                <td>{$cbomem['NIC']}</td>
            </tr>
EDO;
        }

        $cbomemlist.="</table>";

        return $cbomemlist;
    }



//=====================================================================

    public function loadMF(){
        $mfrs = (Officer2DB::getInstance())->loadMF();
        $mflist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>Date</th>
                <th>GN Domain</th>
                <th>Beneficiary Name</th>
                <th>Approved By</th>
                <th>Approved Date</th>
                <th>Approved Bank</th>
            </tr>
EOD;
        foreach ($mfrs as $mfr) {
            $mflist.=<<<EDO
            <tr>
                <td>{$mfr['Date']}</td>
                <td>{$mfr['GNDomain']}</td>
                <td>{$mfr['BenefName']}</td>
                <td>{$mfr['AcceptedBy']}</td>
                <td>{$mfr['AppDate']}</td>
                <td>{$mfr['AppBank']}</td>
            </tr>
EDO;
        }

        $mflist.="</table>";

        return $mflist;
    }


//======================================================================


    public function loadLottary(){
        $lots = (Officer2DB::getInstance())->loadLottary();
        $lotlist =<<<EOD
        <table class="dashtable">
            <tr>
               <th>NIC</th>
               <th>Name</th>
               <th>Address</th>
               <th>Date</th>
            </tr>
EOD;
        foreach ($lots as $lot) {
            $lotlist.=<<<EDO
            <tr>
                <td>{$lot['NIC']}</td>
                <td>{$lot['Name']}</td>
                <td>{$lot['Address']}</td>
                <td>{$lot['Date']}</td>
            </tr>
EDO;
        }

        $lotlist.="</table>";

        return $lotlist;
    }


//======================================================================


}