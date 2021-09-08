<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbh.class.php");

class Officer2DB extends Dbh{


    private static $instance = null;
  

    private function __construct(){}
    

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Officer2DB();
        }
    
        return self::$instance;
    }

    public function loadCBO(){
        $sql = "SELECT * FROM CommunityBasedOrganizations WHERE Expired=0 ORDER BY RenewedDate";
        $stmt = $this->connect()->query($sql);
        $cbos=$stmt->fetchAll();
        return $cbos;
    }

    public function loadCBOmem(){
        $sql = "SELECT * FROM CBOMemberDetailes WHERE Deleted=0 AND Expired=0 ORDER BY CBORegNo";
        $stmt = $this->connect()->query($sql);
        $cbomem=$stmt->fetchAll();
        return $cbomem;
    }

    public function loadLottary(){
        $sql = "SELECT * FROM LottaryFundRecord ORDER BY Date";
        $stmt = $this->connect()->query($sql);
        $lots=$stmt->fetchAll();
        return $lots;
    }

    public function loadMF(){
        $sql = "SELECT * FROM MandatoryFundRequests WHERE Deleted=0 ORDER BY Date";
        $stmt = $this->connect()->query($sql);
        $mfs=$stmt->fetchAll();
        return $mfs;
    }
	
}