<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer1DB/beneficiaryDB.class.php");

class Beneficiary{
    protected $Divisional_Secretariat;
    protected $Bank_Zonal;
    protected $GN_Division;
    protected $GN_Code_Mapping;
    protected $Householder_Name;
    protected $Address;
    protected $NIC;
    protected $Noof_Family_Members;
    protected $Bank_Account_No;
    protected $Relief_Amount;
    protected $Starting_Year;

    public function __construct($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$Noof_Family_Members,$Bank_Account_No,$Relief_Amount,$Starting_Year){

        $this->Divisional_Secretariat = $Divisional_Secretariat;
        $this->Bank_Zonal = $Bank_Zonal;
        $this->GN_Division = $GN_Division;
        $this->GN_Code_Mapping = $GN_Code_Mapping;
        $this->Householder_Name = $Householder_Name;
        $this->Address = $Address;
        $this->NIC = $NIC;
        $this->Noof_Family_Members = $Noof_Family_Members;
        $this->Bank_Account_No = $Bank_Account_No;
        $this->Relief_Amount = $Relief_Amount;
        $this->Starting_Year = $Starting_Year;
    }

    public static function getBeneficiary($Serial_No){

			$Serial_No = (int)$Serial_No;

			$Bank_Zonal = '';
			$GN_Division = '';
			$Address = '';
			$Bank_Account_No = '';

			$beneficiary =  (BeneficiaryDB::getInstance())->getBeneficiary($Serial_No);

			foreach($beneficiary as $benf){
				$Bank_Zonal = $benf['Bank_Zonal'];
				$GN_Division = $benf['GN_Division'];
				$Address = $benf['Address'];
				$Bank_Account_No = $benf['Bank_Account_No'];
			}

			return compact('Bank_Zonal','GN_Division','Address','Bank_Account_No');

		}	
    public function addBeneficiary(){
            (BeneficiaryDB::getInstance())->addBeneficiary($this->Divisional_Secretariat,$this->Bank_Zonal,$this->GN_Division,$this->GN_Code_Mapping,$this->Householder_Name,$this->Address,$this->NIC,$this->Noof_Family_Members,$this->Bank_Account_No,$this->Relief_Amount,$this->Starting_Year);
        }

    public static function updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$Serial_No){
            (BeneficiaryDB::getInstance())->updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$Serial_No);
        }

    public static function deleteBeneficiary($Serial_No){
            (BeneficiaryDB::getInstance())->deleteBeneficiary($Serial_No);
        }
}