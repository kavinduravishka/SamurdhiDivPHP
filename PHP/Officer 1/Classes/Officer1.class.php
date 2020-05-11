<?php include 'Beneficiary.class.php'; ?>


<?php 

	class Officer1 {

		private $beneficiary; 

		public function showBeneficiaries(){
			$this->beneficiary = new Beneficiary();
			$this->beneficiary->load();
		}


		public function addBeneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year,$errors){

			$this->beneficiary = new Beneficiary();
			$this->beneficiary->add($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year,$errors);

		}

		public function deleteBeneficiary($Serial_No){
			$this->beneficiary = new Beneficiary();
			$this->beneficiary->delete($Serial_No);
		}

		public function getCurrentDetails($Serial_No){
			$this->beneficiary = new Beneficiary();
			$this->beneficiary->loadCurrentDetails($Serial_No);
		}

		public function updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No){
			$this->beneficiary = new Beneficiary();
			$this->beneficiary->update($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No);
		}

		public function searchBeneficiary($q){
			$this->beneficiary = new Beneficiary();
			$this->beneficiary->search($q);
			
		}

	}
 ?>