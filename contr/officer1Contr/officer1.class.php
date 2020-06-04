<?php

//require_once("../model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer1DB\officer1DB.class.php");
?>

<?php 
    
    class Officer1{

        public function loadBeneficiaries(){
            $beneficiaryList = (new Officer1DB())->loadBeneficiaries();
            return $beneficiaryList;
        }

        public function searchBeneficiary($search){
            $beneficiaryList = (new Officer1DB())->searchBeneficiary($search);
            return $beneficiaryList;
        }
    }


?>