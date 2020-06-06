<?php

//require_once("../model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\dbh.class.php");

class Officer1DB extends Dbh{
    public function loadBeneficiaries(){
			$sql = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 ORDER BY Serial_No";
			$stmt = $this->connect()->query($sql);
			// $stmt->execute();
			$beneficiaries=$stmt->fetchAll();
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
			$sql = "SELECT * FROM detailsofbenificiaries WHERE  (Householder_Name LIKE '%{$search}%' OR NIC LIKE '%{$search}%') AND is_deleted = 0 ";
			$stmt = $this->connect()->query($sql);
			$b_list = "";
			if($stmt){
				while($row = $stmt->fetch()){
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
			}else{
				$b_list = "<tr></tr>";
			}

			return $b_list;
		}


		public function addBeneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year){

			$sql =  "INSERT INTO detailsofbenificiaries (Divisional_Secretariat,Bank_Zonal,GN_Division,GN_Code_Mapping,Householder_Name, Address,NIC,Noof_Family_Members,Bank_Account_No,Relief_Amount,Starting_Year,is_deleted) VALUES ('{$Divisional_Secretariat}','{$Bank_Zonal}','{$GN_Division}','{$GN_Code_Mapping}','{$Householder_Name}','{$Address}','{$NIC}',{$No_of_Family_Members},'{$Bank_Account_No}',{$Relief_Account},'{$Starting_Year}',0)";
			$stmt = $this->connect()->query($sql);
			if($stmt){
				header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php?beneficiary_added=true');
			}else{
				$errors[] = 'Faild to add the record';
			}
		}
		
		public function updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No){
			$sql = "UPDATE detailsofbenificiaries SET Bank_Zonal='{$Bank_Zonal}',GN_Division='{$GN_Division}'"; 
			$sql .= " ,Address='{$Address}', Bank_Account_No='{$Bank_Account_No}' WHERE Serial_No={$Serial_No}";
			$stmt = $this->connect()->query($sql);
			// $stmt->execute();
			if($stmt){
				header('Location:home-officer1.index.php?user_modified=true');
			}else{
				$errors[] = 'Faild to modify the record';
			}

		}


		public function deleteBeneficiary($Serial_No){
			$sql = "UPDATE detailsofbenificiaries SET is_deleted = 1 WHERE Serial_No={$Serial_No} LIMIT 1";
			$stmt = $this->connect()->query($sql);
			// $stmt->execute();
			if($stmt){
				//user deleted
				header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php?msg=beneficiary_deleted');
			}else{
				header('Location: http://localhost/SamurdhiDivPHP/view/officer1View/beneficiariesView.php?err=delete_failed');
			}
		}
}