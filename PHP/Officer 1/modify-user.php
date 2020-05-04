<?php session_start(); ?> 
<?php require_once('inc/connection_userdb.php'); ?>

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

		$Serial_No = mysqli_real_escape_string($connection,$_GET['Serial_No']);
		$query = "SELECT * FROM detailsofbenificiaries WHERE Serial_No={$Serial_No} LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if($result_set){

			if(mysqli_num_rows($result_set)==1){

				//user found
				$result = mysqli_fetch_assoc($result_set);
				$Bank_Zonal = $result['Bank_Zonal'];
				$GN_Division = $result['GN_Division'];
				$Address = $result['Address'];
				$Bank_Account_No = $result['Bank_Account_No'];

			} else{

				//user not found
				header('Location: users.php?err=user_not_found');
			}

		} else{

			//query unsuccessful
			header('Location: users.php?err=query_failed');
		}
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

		//checking if email address already exists
		// $email = mysqli_real_escape_string($connection,$_POST['email']);
		// $query = "SELECT * FROM user WHERE email = '{$email}'AND id != {$user_id} LIMIT 1";

		// $result_set  = mysqli_query($connection,$query);

		// if($result_set){
		// 	if(mysqli_num_rows($result_set)==1){
		// 		$errors[] = "Email address already exists";
		// 	}
		// }


		if(empty($errors)){

			//no error found.. adding new record
			$Bank_Zonal = mysqli_real_escape_string($connection,$_POST['Bank_Zonal']);
			$GN_Division = mysqli_real_escape_string($connection,$_POST['GN_Division']);
			$Address = mysqli_real_escape_string($connection,$_POST['Address']);
			$Bank_Account_No = mysqli_real_escape_string($connection,$_POST['Bank_Account_No']);
			
			// email address is already sanitize
			// $hashed_password = sha1($password);

			$query = "UPDATE detailsofbenificiaries SET Bank_Zonal='{$Bank_Zonal}', GN_Division='{$GN_Division}', Address='{$Address}', Bank_Account_No='{$Bank_Account_No}' WHERE Serial_No={$Serial_No} LIMIT 1";

			$result = mysqli_query($connection,$query);

			if($result){
				// query successful.   redurecting t user page
				header('Location:users.php?user_modified=true');
			}else{
				$errors[] = 'Faild to modify the record';
			}

		}


	}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add new User</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	<?php require_once('inc/header.php') ?>
	<?php require_once('inc/sidebar.php') ?>




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
		<form action="modify-user.php" method="post" class ="userform">
			<input type="hidden" name="Serial_No" value="<?php echo $Serial_No ?>">
			<p>
				<label>Bank Zonal:</label>
				<input type="text" name="Bank_Zonal" <?php echo 'value="'.$Bank_Zonal.'"' ?>>
			</p>

			<p>
				<label>G.N Division:</label>
				<input type="text" name="GN_Division" <?php echo 'value="'.$GN_Division.'"' ?>>
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