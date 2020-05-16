<?php session_start(); ?> 
<?php require_once("../classes/Officer1.class.php") ?>

<?php 
	// checking if a user is logged in
	if(!isset($_SESSION['user_name'])){
		header('Location: officer1-dashboard.index.php');
	}
 ?>
<!-- form validation -->
<?php 

	$errors = array();
	$Divisional_Secretariat='';
	$Bank_Zonal='';
	$GN_Division='';
	$GN_Code_Mapping='';
	$Householder_Name='';
	$Address='';
	$NIC='';
	$No_of_Family_Members='';
	$Bank_Account_No='';
	$Relief_Account='';
	$Starting_Year='';



	if(isset($_POST['submit'])){

		$Divisional_Secretariat = $_POST['Divisional_Secretariat'];
		$Bank_Zonal = $_POST['Bank_Zonal'];
		$GN_Division = $_POST['GN_Division'];
		$GN_Code_Mapping = $_POST['GN_Code_Mapping'];
		$Householder_Name = $_POST['Householder_Name'];
		$Address = $_POST['Address'];
		$NIC = $_POST['NIC'];
		$No_of_Family_Members = $_POST['No_of_Family_Members'];
		$Bank_Account_No = $_POST['Bank_Account_No'];
		$Relief_Account = $_POST['Relief_Account'];
		$Starting_Year = $_POST['Starting_Year'];


		//checking requiured fields
		$req_field = array('Divisional_Secretariat','Bank_Zonal','GN_Division','GN_Code_Mapping','Householder_Name', 'Address','NIC','No_of_Family_Members','Bank_Account_No','Relief_Account','Starting_Year');
		foreach ($req_field as $field) {
			if(empty(trim($_POST[$field]))){
				$errors[] = $field . " is required";
			}
		}

		//checking max length
		$max_len_field = array('Divisional_Secretariat'=> 100,'Bank_Zonal'=> 100,'GN_Division'=>100,'GN_Code_Mapping'=>100,'Householder_Name'=>100, 'Address'=>100,'NIC'=>15,'No_of_Family_Members'=>30,'Bank_Account_No'=>50,'Relief_Account'=>200);
		foreach ($max_len_field as $field => $max_len) {
			if(strlen(trim($_POST[$field]))>$max_len){
				$errors[] = $field . ' must be less than ' . $max_len . 'characters';
			}
		}

		if(empty($errors)){
			//no error found.. adding new record
			
			$officer1 = new Officer1();
			$officer1->addBeneficiary($Divisional_Secretariat,$Bank_Zonal,$GN_Division,$GN_Code_Mapping,$Householder_Name,$Address,$NIC,$No_of_Family_Members,$Bank_Account_No,$Relief_Account,$Starting_Year,$errors);

			$errors[] = 'Faild to add new record';
			
			
		}


	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add new User</title>
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	  
	 <?php require_once("../include/header.inc.php"); ?>
	  <?php 
    	$navpaths=array("Dashboard"=>"officer1-dashboard.index.php");
		require_once("../include/navbar.inc.php");
	?>
	

	<main>
		<div class="maincontainer">
		<h1>Add New Beneficiary</h1>

		<?php 

			if(!empty($errors)){ 
				echo '<div class = "errmsg">';
				echo '<b>There were error(s) on your form.<br></b>';
				foreach ($errors as $error) {
					$error = ucfirst(str_replace("_", " ", $error));
					echo $error . '<br>';
				}
				echo '</div>';
			}

		 ?>
		<form action="add-beneficiary.index.php" method="post" class ="userform">
			<p>
				<label>	Divisional Secretariat:</label>
				<input type="text" name="Divisional_Secretariat" <?php echo 'value="'.$Divisional_Secretariat.'"' ?>>
			</p>

			<p>
				<label>Bank Zonal:</label>
				<!-- <input type="text" name="Bank_Zonal" <?php echo 'value="'.$Bank_Zonal.'"' ?>> -->
				<select name="Bank_Zonal" <?php echo 'value="'.$Bank_Zonal.'"' ?>>
					<option>Yatigaha</option>
					<option>Badalgama</option>
					<option>Koongodamulla</option>
					<option>Katuwelgama</option>
					<option>Welangana</option>
					<option>Dunagaha</option>
					<option>Kotadeniyawa</option>
					<option>Divulapitiya</option>
					<option>Walpita</option>
				</select>
			</p>
			<p>
				<label>G.N Division:</label>
				<!-- <input type="text" name="GN_Division" <?php echo 'value="'.$GN_Division.'"' ?>> -->
				<select name="GN_Division" <?php echo 'value="'.$GN_Division.'"' ?>>
					<option>41-Paranahalpe</option>
					<option>41A-Paranahalpe</option>
					<option>42-Halpe</option>
					<option>42A-Nariyamulla</option>
					<option>42B-Gurullagama</option>
					<option>43-Pahala-Kithulwala</option>
					<option>43A-Ihala-Kithulwala</option>
					<option>43B-Uthuru-Kithulwala</option>
					<option>44-Waththemulla</option>
					<option>44A-Ihala-Kithulgala</option>
					<option>44B-Pahala-Kithulgala</option>
					<option>45-Kuligedara</option>
					<option>46-Pahala-Madithiyawala</option>
					<option>46A-Pahala-Madithiyawala</option>
					<option>47-Hangawaththa</option>
				</select>
			</p>
			<p>
				<label>G.N Code Mapping:</label> 
				<input type="text" name="GN_Code_Mapping" <?php echo 'value="'.$GN_Code_Mapping.'"' ?>>
			</p>
			<p>
				<label>Householder Name:</label> 
				<input type="text" name="Householder_Name" <?php echo 'value="'.$Householder_Name.'"' ?>>
			</p>
			
			<p>
				<label>Address:</label> 
				<input type="text" name="Address" <?php echo 'value="'.$Address.'"' ?>>
			</p>
			<p>
				<label>NIC:</label> 
				<input type="text" name="NIC" <?php echo 'value="'.$NIC.'"' ?>>
			</p>
			<p>
				<label>No.of Family Members:</label> 
				<input type="text" name="No_of_Family_Members" <?php echo 'value="'.$No_of_Family_Members.'"' ?>>
			</p>
			<p>
				<label>Bank Account No:</label> 
				<input type="text" name="Bank_Account_No" <?php echo 'value="'.$Bank_Account_No.'"' ?>>
			</p>
			<p>
				<label>Relief Account:</label> 
				<input type="text" name="Relief_Account" <?php echo 'value="'.$Relief_Account.'"' ?>>
			</p>
			<p>
				<label>Starting Year:</label> 
				<input type="text" name="Starting_Year" <?php echo 'value="'.$Starting_Year.'"' ?>>
			</p>
			<p>
				<label for="">&nbsp;</label>
				<button class="submit" name="submit">Save</button>
			</p>

		</form>
		</div>
	</main>
</body>
</html>

