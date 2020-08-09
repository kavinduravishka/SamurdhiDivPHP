<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFRelREP.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFReqDB.class.php");

class MandatoryFund{

    private static $instance=null;

	private function __construct(){
		$this->MFRelease  = new MFRelREP();
        $this->MFRequest  = new MFReqDB();
	}

//==============   Singleton   =====================
	public static function getInstance()
    {

        if (self::$instance == null)
        {
        self::$instance = new MandatoryFund();
        }
    
        return self::$instance;
    }

//==================================================


    public function ReleaseReport(){

        $ra3500 = array("3500","3020");
        $ra2500 = array("2500","2120");
        $ra1500 = array("1500","1320","1220");
        $ra420  = array("420");


        $arrBig = array();


        array_push($arrBig,
                "Yatigaha"=>array(),
                "Badalgama"=>array(),
                "Kongodamulla"=>array(),
                "Katuwellegama"=>array(),
                "Welangana"=>array(),
                "Dunagaha"=>array(),
                "Kotadeniyawa"=>array(),
                "Divulapitiya"=>array(),
                "Walpita"=>array()
            );


        foreach ($arrBig as $name => $detailes) {

            $bankName=$name;

            $count3500=0;
            $count2500=0;
            $count1500=0;
            $count420=0;

            $data = array();

            $data['Bank_Zonal'] = $bankName;


            
            foreach ($ra3500 as $key=>$relAmount) {
                $data['Relief_Amount'] = $relAmount;
                $count = $this->MFRelease->find($data);
                $count3500 += $count['count'];
            }
            $arrBig[$bankName]['3500'] = $count3500;



            foreach ($ra2500 as $relAmount) {
                $data['Relief_Amount'] = $relAmount;
                $count = $this->MFRelease->find($data);
                $count2500 += $count['count'];
            }
            $arrBig[$bankName]['2500'] = $count2500;



            foreach ($ra1500 as $relAmount) {
                $data['Relief_Amount'] = $relAmount;
                $count = $this->MFRelease->find($data);
                $count1500 += $count['count'];
            }
            $arrBig[$bankName]['1500'] = $count1500;



            foreach ($ra420 as $relAmount) {
                $data['Relief_Amount'] = $relAmount;
                $count = $this->MFRelease->find($data);
                $count420 += $count['count'];
            }
            $arrBig[$bankName]['420'] = $count420;
            
        }

        return $arrBig;
    	//$this->MFRelease->find($data);
    }



    public function RequestWrite($data){
    	$this->MFRequest->write($data);
    }
}

?>