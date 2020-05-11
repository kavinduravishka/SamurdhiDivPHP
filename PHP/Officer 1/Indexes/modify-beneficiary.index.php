<?php session_start(); ?> 
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Classes\Officer1.class.php") ?>

<?php 
	//checking if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header('Location: index.php');
	}
 ?>
<!-- form validation -->
<?php 

	$errors = array();
	$Serial_No = '';
	$Bank_Zonal = '';
	$GN_Division = '';
	$Address = '';
	$Bank_Account_No = '';

	//view the user
	if(isset($_GET['Serial_No'])){


		$Serial_No = $_GET['Serial_No'];

		$officer1 = new Officer1();
		$currentDetails = $officer1->getCurrentDetails($Serial_No);
		extract($currentDetails);
		
	}

	//when submit
	if(isset($_POST['submit'])){

		$Serial_No = $_POST['Serial_No'];
		$Bank_Zonal = $_POST['Bank_Zonal'];
		$GN_Division = $_POST['GN_Division'];
		$Address = $_POST['Address'];
		$Bank_Account_No = $_POST['Bank_Account_No'];

		
		//checking requiured fields
		$req_field = array('Bank_Zonal','GN_Division','Address','Bank_Account_No');
		foreach ($req_field as $field) {
			if(empty(trim($_POST[$field]))){
				$errors[] = $field . " is required";
			}
		}

		//checking max length
		$max_len_field = array('Bank_Zonal'=>100,'GN_Division'=>100,'Address'=>100,'Bank_Account_No'=>50);
		foreach ($max_len_field as $field => $max_len) {
			if(strlen(trim($_POST[$field]))>$max_len){
				$errors[] = $field . ' must be less than ' . $max_len . 'characters';
			}
		}

		if(empty($errors)){

			//no error found.. adding new record
			$Bank_Zonal = $_POST['Bank_Zonal'];
			$GN_Division = $_POST['GN_Division'];
			$Address = $_POST['Address'];
			$Bank_Account_No = $_POST['Bank_Account_No'];
			
			// email address is already sanitize
			// $hashed_password = sha1($password);

			$officer1 = new Officer1();
			$officer1->updateBeneficiary($Bank_Zonal,$GN_Division,$Address,$Bank_Account_No,$errors,$Serial_No);
			unset($officer1);
		}

	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add new User</title>
	<link rel="stylesheet" type="text/css" href="/myphp/CSS/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\header.inc.php"); ?>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\sidebar.inc.php"); ?>


	<main>



		<div class="maincontainer">
		<h1>Modify Beneficiaries<!-- <span><a href="users.php"> < Back to User List</a></span> --></h1>

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
		<form action="modify-beneficiary.index.php" method="post" class ="userform">
			<input type="hidden" name="Serial_No" value="<?php echo $Serial_No ?>">
			<p>
				<label>Bank Zonal:</label>
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
				<select name="GN_Division" <?php echo 'value="'.$G.N.Division.'"' ?>>
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
				<label>Address:</label>
				<input type="text" name="Address" <?php echo 'value="'.$Address.'"' ?>>
			</p>
			<p>
				<label>Bank Account No:</label>
				<input type="text" name="Bank_Account_No" <?php echo 'value="'.$Bank_Account_No.'"' ?>>
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

<?php mysqli_close($connection); ?>