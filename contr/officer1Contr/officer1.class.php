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

        public function addBeneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year){
            (new Officer1DB())->addBeneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year,$errors);
        }

        public function updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No){
            (new Officer1DB())->updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No);
        }

        public function deleteBeneficiary($Serial_No){
            (new Officer1DB())->deleteBeneficiary($Serial_No);
        }
    }


?>