<?php

//require_once("../model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer1DB\officer1DB.class.php");
?>

<?php 
    
    class Officer1{

        public function loadBeneficiaries(){
            $beneficiaries = (new Officer1DB())->loadBeneficiaries();
            $user_list = "";
			foreach ($beneficiaries as $beneficiary) {
				$user_list .= "<tr>";
					$user_list .= "<td>{$beneficiary['Serial_No']}</td>";
					$user_list .= "<td>{$beneficiary['Divisional_Secretariat']}</td>";
					$user_list .= "<td>{$beneficiary['Bank_Zonal']}</td>";
					$user_list .= "<td>{$beneficiary['GN_Division']}</td>";
					$user_list .= "<td>{$beneficiary['GN_Code_Mapping']}</td>";
					$user_list .= "<td>{$beneficiary['Householder_Name']}</td>";
					$user_list .= "<td>{$beneficiary['Address']}</td>";
					$user_list .= "<td>{$beneficiary['NIC']}</td>";
					$user_list .= "<td>{$beneficiary['Noof_Family_Members']}</td>";
					$user_list .= "<td>{$beneficiary['Bank_Account_No']}</td>";
					$user_list .= "<td>{$beneficiary['Relief_Amount']}</td>";
					$user_list .= "<td>{$beneficiary['Starting_Year']}</td>";
					$user_list .= "<td><a href=\"modify-beneficiaryView.php?Serial_No={$beneficiary['Serial_No']}\">Edit</a></td>";
					$user_list .= "<td><a href=\"/SamurdhiDivPHP/view/includes/officer1Inc/delete-beneficiaryInc.php?Serial_No={$beneficiary['Serial_No']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
					$user_list .= "</tr>";
			}
			return $user_list;
        }

        public function searchBeneficiary($search){
            $beneficiaries = (new Officer1DB())->searchBeneficiary($search);
            $b_list = "";
				foreach($beneficiaries as $row){
					$b_list .= "<tr>";
					$b_list .= "<td>{$row['Serial_No']}</td>";
					$b_list .= "<td>{$row['Divisional_Secretariat']}</td>";
					$b_list .= "<td>{$row['Bank_Zonal']}</td>";
					$b_list .= "<td>{$row['GN_Division']}</td>";
					$b_list .= "<td>{$row['GN_Code_Mapping']}</td>";
					$b_list .= "<td>{$row['Householder_Name']}</td>";
					$b_list .= "<td>{$row['Address']}</td>";
					$b_list .= "<td>{$row['NIC']}</td>";
					$b_list .= "<td>{$row['Noof_Family_Members']}</td>";
					$b_list .= "<td>{$row['Bank_Account_No']}</td>";
					$b_list .= "<td>{$row['Relief_Amount']}</td>";
					$b_list .= "<td>{$row['Starting_Year']}</td>";
					$b_list .= "<td><a href=\"modify-beneficiaryView.php?Serial_No={$row['Serial_No']}\">Edit</a></td>";
					$b_list .= "<td><a href=\"/SamurdhiDivPHP/view/includes/officer1Inc/delete-beneficiaryInc.php?Serial_No={$row['Serial_No']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
					$b_list .= "</tr>";
				}
                // $b_list .= '</table>';
                return $b_list;
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