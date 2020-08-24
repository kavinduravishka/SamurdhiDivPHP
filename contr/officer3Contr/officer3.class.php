<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/SocialSF.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/Scholarship.class.php");

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/officer3DB.class.php");


class Officer3 extends Officer{


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
        if ($request==3) {
            header('Location: /SamurdhiDivPHP/view/officer3view/dashboardView.php');
            exit;
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


    //=================   DASHBOARD   ==================

    public function loadScholar(){
        $fetched = (Officer3DB::getInstance())->loadScholar();
        $fetchlist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>Name</th>
                <th>NIC</th>
                <th>Gender</th>
                <th>Ethnicity</th>
                <th>Guardian</th>
                <th>SpeciallyAbled</th>
                <th>Stream</th>
                <th>School</th>
                <th>Address</th>
                <th>Bank</th>
                <th>SisurakaAcNo</th>
                <th>PeriodID</th>
            </tr>
EOD;
        foreach ($fetched as $row) {
            $fetchlist.=<<<EDO
            <tr>
                <td>{$row['Name']}</td>
                <td>{$row['NIC']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['Ethnicity']}</td>
                <td>{$row['Guardian']}</td>
                <td>{$row['SpeciallyAbled']}</td>
                <td>{$row['Stream']}</td>
                <td>{$row['School']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Bank']}</td>
                <td>{$row['SisurakaAcNo']}</td>
                <td>{$row['PeriodID']}</td>
            </tr>
EDO;
        }
    
        $fetchlist.="</table>";
    
        return $fetchlist;
    }

//==========================================================================

    public function loadSSFapp(){
        $fetched = (Officer3DB::getInstance())->loadSSFapp();
        $fetchlist =<<<EOD
        <table class="dashtable">
            <tr>
               <th>Zone</th>
               <th>ForceNo</th>
               <th>Village</th>
               <th>GN Domain</th>
               <th>SS Ownership No</th>
               <th>Name</th>
               <th>Address</th>
               <th>Successer</th>
               <th>Home No</th>
               <th>Banned</th>
            </tr>
EOD;
        foreach ($fetched as $row) {
            $fetchlist.=<<<EDO
            <tr>
                <td>{$row['Zone']}</td>
                <td>{$row['ForceNo']}</td>
                <td>{$row['Village']}</td>
                <td>{$row['GNDomain']}</td>
                <td>{$row['SSOwnershipNo']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Successer']}</td>
                <td>{$row['HomeNo']}</td>
                <td>{$row['Banned']}</td>
            </tr>
EDO;
        }
    
        $fetchlist.="</table>";
    
        return $fetchlist;
    }

//==========================================================================

    public function loadSSFmem(){
        $fetched = (Officer3DB::getInstance())->loadSSFmem();
        $fetchlist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>OwnershipNo</th>
                <th>Name</th>
                <th>Gender</th>
                <th>MaritialState</th>
                <th>BDay</th>
                <th>Age</th>
                <th>RelToBenif</th>
                <th>Profession</th>
                <th>NIC</th>
                <th>Dead</th>
            </tr>
EOD;
        foreach ($fetched as $row) {
            $fetchlist.=<<<EDO
            <tr>
                <td>{$row['OwnershipNo']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['MaritialState']}</td>
                <td>{$row['BDay']}</td>
                <td>{$row['Age']}</td>
                <td>{$row['RelToBenif']}</td>
                <td>{$row['Profession']}</td>
                <td>{$row['NIC']}</td>
                <td>{$row['Dead']}</td>
            </tr>
EDO;
        }
    
        $fetchlist.="</table>";
    
        return $fetchlist;
    }

//==========================================================================
    public function loadSSFpay(){
        $fetched = (Officer3DB::getInstance())->loadSSFpay();
        $fetchlist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>Date</th>
                <th>Beneficiary No</th>
                <th>Benificiary Name</th>
                <th>Amount</th>
                <th>Assured by</th>
                <th>GN Domain</th>
                <th>Reason</th>
            </tr>
EOD;
        foreach ($fetched as $row) {
            $fetchlist.=<<<EDO
            <tr>
                <td>{$row['Date']}</td>
                <td>{$row['BeneficiaryNo']}</td>
                <td>{$row['BenifName']}</td>
                <td>{$row['Amount']}</td>
                <td>{$row['NameAssured']}</td>
                <td>{$row['GNDiv']}</td>
                <td>{$row['Reason']}</td>
            </tr>
EDO;
        }
    
        $fetchlist.="</table>";
    
        return $fetchlist;
    }

}

?>