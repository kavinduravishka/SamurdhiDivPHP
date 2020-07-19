<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\dbh.class.php"); ?>
<?php 

    class ReportDB extends Dbh{

        public function getGNDetails($GN_Division,$Bank_zonal){
            $sql = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division=? AND Bank_Zonal=?  ORDER BY Serial_No";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$GN_Division,$Bank_zonal]);
            $users = $stmt->fetchAll();
            return $users;
        }

        public function getZonalDetails($Bank_zonal){
             $sql = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND Bank_Zonal=?  ORDER BY Serial_No";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$Bank_zonal]);
            $users = $stmt->fetchAll();
            return $users;
        }
    }


?>