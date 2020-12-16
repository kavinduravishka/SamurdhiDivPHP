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


    public function SSFamcheckifAlready($data){
        $socialsf=SocialSF::getInstance();
        return $socialsf->SSFamcheckifAlready($data);
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
                <th>Specially abled</th>
                <th>Stream</th>
                <th>School</th>
                <th>Address</th>
                <th>Bank</th>
                <th>Sisuraka Account No</th>
                <th>Period</th>
            </tr>
EOD;
        foreach ($fetched as $row) {

            $period='';

            switch ($row['PeriodID']){
                case 1:
                    $period="2018-2020";
                    break;
                case 2:
                    $period="2019-2021";
                    break;
                case 3:
                    $period="2020-2022";
                    break;
                case 4:
                    $period="2021-2023";
                    break;
                case 5:
                    $period="2022-2024";
                    break;
                case 6:
                    $period="2023-2025";
                    break;
                case 7:
                    $period="2024-2026";
                    break;
                case 8:
                    $period="2025-2027";
                    break;
                case 9:
                    $period="2026-2028";
                    break;
            }
            
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
                <td>{$period}</td>
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
               <th>Force No</th>
               <th>Village</th>
               <th>GN Domain</th>
               <th>SSF Ownership No</th>
               <th>Name</th>
               <th>Address</th>
               <th>Successer</th>
               <th>Home No</th>
               <th>Banned</th>
               <th>Family members</th>
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
                <td><a href="dashboardView.php?q=ssffam&ssfownno={$row['SSOwnershipNo']}">Family members</a></td>
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
                <th>SSF Ownership No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Maritial State</th>
                <th>Birth Day</th>
                <th>Age</th>
                <th>Relativeness to the benificiary</th>
                <th>Profession</th>
                <th>NIC</th>
                <th>Dead</th>
            </tr>
EOD;
        foreach ($fetched as $row) {

            $maritialstate='';

            switch ($row['MaritialState']){
                case 0:
                    $maritialstate="Unmarried";
                    break;
                case 1:
                    $maritialstate="Married";
                    break;
            }

            $dead='';

            if($row['Dead']==0){
                $dead="No";
            }else{
                $dead="Yes";
            }

            $fetchlist.=<<<EDO
            <tr>
                <td>{$row['OwnershipNo']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Gender']}</td>
                <td>{$maritialstate}</td>
                <td>{$row['BDay']}</td>
                <td>{$row['Age']}</td>
                <td>{$row['RelToBenif']}</td>
                <td>{$row['Profession']}</td>
                <td>{$row['NIC']}</td>
                <td>{$dead}</td>
            </tr>
EDO;
        }
    
        $fetchlist.="</table>";
    
        return $fetchlist;
    }




    public  function selectSSFmem($ssfownno){
        $fetched = (Officer3DB::getInstance())->selectSSFmem($ssfownno);
        $fetchlist =<<<EOD
        <table class="dashtable">
            <tr>
                <th>SSF Ownership No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Maritial State</th>
                <th>Birth Day</th>
                <th>Age</th>
                <th>Relativeness to the benificiary</th>
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
                <th>Benificiary's Name</th>
                <th>Amount of  money</th>
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