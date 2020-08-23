<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/SocialSF.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/Scholarship.class.php");

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/officer3DB.class.php");


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

    public function loadCBOmem(){
        $cbomems = (Officer2DB::getInstance())->loadCBOmem();
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

}

?>