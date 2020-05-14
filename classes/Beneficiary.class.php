<?php include 'Dbh.class.php'; ?>
<?php
	class Beneficiary extends Dbh{

		public function load(){
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
					$user_list .= "<td><a href=\"modify-beneficiary.index.php?Serial_No={$beneficiary['Serial_No']}\">Edit</a></td>";
					$user_list .= "<td><a href=\"delete-beneficiary.index.php?Serial_No={$beneficiary['Serial_No']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
					$user_list .= "</tr>";
			}
			echo $user_list;
		}





		public function add($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year,$errors){

			$sql =  "INSERT INTO detailsofbenificiaries (Divisional_Secretariat,Bank_Zonal,GN_Division,GN_Code_Mapping,Householder_Name, Address,NIC,Noof_Family_Members,Bank_Account_No,Relief_Account,Starting_Year,is_deleted) VALUES ('{$Divisional_Secretariat}','{$Bank_Zonal}','{$GN_Division}','{$GN_Code_Mapping}','{$Householder_Name}','{$Address}','{$NIC}',{$No_of_Family_Members},'{$Bank_Account_No}',{$Relief_Account},'{$Starting_Year}',0)";
			$stmt = $this->connect()->query($sql);
			// $stmt->execute();
			if($stmt){
				header('Location:home-officer1.index.php?beneficiary_added=true');
			}else{
				$errors[] = 'Faild to add new record';
			}
		}




		public function delete($Serial_No){
			$sql = "UPDATE detailsofbenificiaries SET is_deleted = 1 WHERE Serial_No={$Serial_No} LIMIT 1";
			$stmt = $this->connect()->query($sql);
			// $stmt->execute();
			if($stmt){
				//user deleted
				header('Location:home-officer1.index.php?msg=beneficiary_deleted');
			}else{
				header('Location:home-officer1.index.php?err=delete_failed');
			}
		}


		public function loadCurrentDetails($Serial_No){
			$sql= "SELECT * FROM detailsofbenificiaries WHERE Serial_No={$Serial_No} LIMIT 1";
			$stmt = $this->connect()->query($sql);
			$details = $stmt->fetchAll();
			// $stmt->execute();
			// if($stmt){

			// 	if($currentValues = $stmt->fetch()){
			// 		return $currentValues;
			// 	}
			// }else{
			// 	header('Location:home-officer1.index.php?err=query_failed');
			// }		
			$Bank_Zonal = '';
			$GN_Division = '';
			$Address = '';
			$Bank_Account_No = '';

			foreach ($details as $detail) {
				$Bank_Zonal = $detail['Bank_Zonal'];
				$GN_Division = $detail['GN_Division'];
				$Address = $detail['Address'];
				$Bank_Account_No = $detail['Bank_Account_No'];
			}

			return compact('Bank_Zonal','GN_Division','Address','Bank_Account_No');

		}


		public function update($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No){
			$sql = "UPDATE detailsofbenificiaries SET Bank_Zonal='{$Bank_Zonal}',GN_Division='{$GN_Division}'"; 
			$sql .= " ,Address='{$Address}', Bank_Account_No='{$Bank_Account_No}' WHERE Serial_No={$Serial_No} LIMIT 1";
			$stmt = $this->connect()->query($sql);
			// $stmt->execute();
			if($stmt){
				header('Location:home-officer1.index.php?user_modified=true');
			}else{
				$errors[] = 'Faild to modify the record';
			}

		}


		public function search($q){
			$sql = "SELECT * FROM detailsofbenificiaries WHERE is_deleted = 0 AND Householder_Name='{$q}'";
			$stmt = $this->connect()->query($sql);
			$b_list = '<table class = "masterlist"><tr><th>Serial No</th><th>Divisional Secretariat</th><th>Bank Zonal</th><th>G.N Division</th><th>G.N_Code Mapping</th><th>Householder Name</th><th>Address</th><th>NIC</th><th>No.of Family Members</th><th>BankAccount No</th><th>Relief Account</th><th>Starting Year</th></tr>';
			if($stmt){
				while($row = $stmt->fetch()){
					$b_list .= "<tr>";
					$b_list .= "<td>{$user['Serial_No']}</td>";
					$b_list .= "<td>{$user['Divisional_Secretariat']}</td>";
					$b_list .= "<td>{$user['Bank_Zonal']}</td>";
					$b_list .= "<td>{$user['GN_Division']}</td>";
					$b_list .= "<td>{$user['GN_Code_Mapping']}</td>";
					$b_list .= "<td>{$user['Householder_Name']}</td>";
					$b_list .= "<td>{$user['Address']}</td>";
					$b_list .= "<td>{$user['NIC']}</td>";
					$b_list .= "<td>{$user['Noof_Family_Members']}</td>";
					$b_list .= "<td>{$user['Bank_Account_No']}</td>";
					$b_list .= "<td>{$user['Relief_Account']}</td>";
					$b_list .= "<td>{$user['Starting_Year']}</td>";
					$b_list .= "</tr>";
				}
				$b_list .= '</table>';
			}else{
				$b_list = "query failed!!";
			}

			echo $b_list;
		}


	}	


 ?>