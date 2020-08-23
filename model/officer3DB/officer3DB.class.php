<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbh.class.php");

class Officer3DB extends Dbh{


    private static $instance = null;
  

    private function __construct(){}
    

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Officer3DB();
        }
    
        return self::$instance;
    }

    public function loadScholar(){
        $sql = "SELECT * FROM SipdoraScholarship WHERE Deleted=0 ORDER BY ID";
        $stmt = $this->connect()->query($sql);
        $schol=$stmt->fetchAll();
        return $schol;
    }

    public function loadSSFapp(){
        $sql = "SELECT * FROM SSFundApplicants WHERE Deleted=0 ORDER BY SerialNo";
        $stmt = $this->connect()->query($sql);
        $ssfapp=$stmt->fetchAll();
        return $ssfapp;
    }

    public function loadSSFmem(){
        $sql = "SELECT * FROM SSFAppFamMem WHERE Deleted=0 ORDER BY OwnershipNo";
        $stmt = $this->connect()->query($sql);
        $ssffammem=$stmt->fetchAll();
        return $ssffammem;
    }

    public function loadSSFpay(){
        $sql = "SELECT * FROM SSFundPayments WHERE Expired=0 ORDER BY SerialNo";
        $stmt = $this->connect()->query($sql);
        $ssfpay=$stmt->fetchAll();
        return $ssfpay;
    }
	
}