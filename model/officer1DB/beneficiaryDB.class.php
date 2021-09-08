<?php

//require_once("../model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbh.class.php");

class BeneficiaryDB extends Dbh{
	
	private static $instance = null;
  private function __construct(){}
 
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new BeneficiaryDB();
    }
 
    return self::$instance;
  }

  	public function getBeneficiary($Serial_No){
		$Serial_No = (int)$Serial_No;
		$sql="SELECT * FROM detailsofbenificiaries WHERE Serial_No=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Serial_No]);
        $beneficiary=$stmt->fetchAll();

        return $beneficiary;
      }
		public function addBeneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year){

			$sql =  "INSERT INTO detailsofbenificiaries (Divisional_Secretariat,Bank_Zonal,GN_Division,GN_Code_Mapping,Householder_Name, Address,NIC,Noof_Family_Members,Bank_Account_No,Relief_Amount,Starting_Year,is_deleted) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year,0]);
			if($stmt){
				header('Location: /SamurdhiDivPHP/view/officer1View/beneficiariesView.php?beneficiary_added=true');
			}else{
				$errors[] = 'Faild to add the record';
			}
		}
		
		public function updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$Serial_No){
			$sql = "UPDATE detailsofbenificiaries SET Bank_Zonal=? ,GN_Division=?,Address=?, Bank_Account_No=? WHERE Serial_No=?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$Serial_No]);
			if($stmt){
				header('Location: /SamurdhiDivPHP/view/officer1View/beneficiariesView.php?user_modified=true');
			}else{
				//$errors[] = 'Faild to modify the record';
				//header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php?user_modified=true');
			}

		}


		public function deleteBeneficiary($Serial_No){
			$sql = "UPDATE detailsofbenificiaries SET is_deleted = ? WHERE Serial_No=? LIMIT 1";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([1,$Serial_No]);
			if($stmt){
				//user deleted
				header('Location: /SamurdhiDivPHP/view/officer1View/beneficiariesView.php?msg=beneficiary_deleted');
			}else{
				header('Location: /SamurdhiDivPHP/view/officer1View/beneficiariesView.php?err=delete_failed');
			}
		}



}