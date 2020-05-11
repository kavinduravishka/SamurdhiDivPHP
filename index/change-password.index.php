<?php session_start(); ?> 
<?php  include 'includes/autoloader.inc.php'; ?>

<?php 
	//checking if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header('Location: index.php');
	}
 ?>
<!-- form validation -->
<?php 

	$errors = array();
	$user_id = '';
	$first_name = '';
	$last_name = '';
	$email = '';
	$password = '';

	//view the user
	if(isset($_GET['user_id'])){

		$user_id = mysqli_real_escape_string($connection,$_GET['user_id']);
		$query = "SELECT * FROM user WHERE id={$user_id} LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if($result_set){

			if(mysqli_num_rows($result_set)==1){

				//user found
				$result = mysqli_fetch_assoc($result_set);
				$first_name = $result['first_name'];
				$last_name = $result['last_name'];
				$email = $result['email'];
				$password = $result['password'];

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

		$user_id = $_POST['user_id'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		
		//checking requiured fields
		$req_field = array('user_id','password');
		foreach ($req_field as $field) {
			if(empty(trim($_POST[$field]))){
				$errors[] = $field . " is required";
			}
		}

		//checking max length
		$max_len_field = array('password'=>50);
		foreach ($max_len_field as $field => $max_len) {
			if(strlen(trim($_POST[$field]))>$max_len){
				$errors[] = $field . ' must be less than ' . $max_len . 'characters';
			}
		}

		


		if(empty($errors)){

	
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			
			// email address is already sanitize
			$hashed_password = sha1($password);

			$query = "UPDATE user SET password = '{$hashed_password}' WHERE id={$user_id} LIMIT 1 ";

			$result = mysqli_query($connection,$query);

			if($result){
				// query successful.   redurecting t user page
				header('Location:users.php?user_modified=true');
			}else{
				$errors[] = 'Faild to update the password';
			}

		}


	}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\header.inc.php"); ?>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\sidebar.inc.php"); ?>
	<main>
		<div class="maincontainer">
		<h1>Change Password<span><a href="users.php"> < Back to User List</a></span></h1>

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
		<form action="change-password.php" method="post" class ="userform">
			<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
			<p>
				<label>First Name:</label>
				<input type="text" name="first_name" <?php echo 'value="'.$first_name.'"' ?> disabled>
			</p>

			<p>
				<label>Last Name:</label>
				<input type="text" name="last_name" <?php echo 'value="'.$last_name.'"' ?> disabled>
			</p>
			<p>
				<label>Email Address:</label>
				<input type="email" name="email" required <?php echo 'value="'.$email.'"' ?> disabled>
			</p>
			<p>
				<label>New Password:</label> 
				<input type="password" name="password" id="password">
			</p>
			<p>
				<label>Show Password:</label> 
				<input type="checkbox" name="showpassword" id="showpassword" style="width: 20px; height: 20px;">
			</p>
			<p>
				<label for="">&nbsp;</label>
				<button class="submit" name="submit">Update Password</button>
			</p>

		</form>
	</div>
	</main>
	<script src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$('#showpassword').click(function(){
				if( $('#showpassword')).is(':checked'){
					$('#password').attr('type','text');
				} else{
					$('#password').attr('type','password');
				}
			})
		})
	</script>
</body>
</html>

<?php mysqli_close($connection); ?>