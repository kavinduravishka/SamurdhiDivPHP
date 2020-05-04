<?php session_start(); ?> 

 <?php require_once('inc/connection_userdb.php'); ?>

<?php 
	// check for form submission
	if(isset($_POST['submit'])){

		$errors =array();

		// check if the username and password has been entered
		if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
			$errors[] = 'Username is Missing / Invalid';
		}
		if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
			$errors[] = 'Username is Missing / Invalid';
		}

		//check is there are any error in the form
		if (empty($errors)){

			//save username and password into variable
			$email    = mysqli_real_escape_string($connection,$_POST['email']);	
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$hash_passowrd = sha1($password);

			//preparer databse query
			$query = "SELECT * FROM user WHERE email='{$email}' AND password='{$hash_passowrd}' LIMIT 1";

			$result_set = mysqli_query($connection,$query);
			if($result_set){
				//query successful

				if(mysqli_num_rows($result_set)==1){
					//valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['first_name'] = $user['first_name'];
					// redirect to users.php
					header('Location: users.php');
				}else {
					//user name and password invalid
					$errors[] = 'Invalild Username / Password';
				}
			}else{
				$errors[] =  'Database query failed';
			}

		}
	}



	

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In - User Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="loginPage">
 	<div class="login">
 		<form action="index.php" method="post">
		<fieldset>
			<legend><h1>Log In</h1></legend>

			<?php 
			//if not, display the error
				if(isset($errors) && !empty($errors)){
					echo '<p class="error">Invalid Username / Password</p>';

				}
			 ?>

			 <?php 
			 		if(isset($_GET['logout'])){
			 			echo '<p class="info">You have successfully logged out 
			 			the system</p>';
			 		}
			  ?>

			<p>
				<label>Usernmae:</label>
				<input type="text" name="email" placeholder="Email Address">
			</p>

			<p>
				<label>Password:</label>
				<input type="password" name="password" placeholder="password">
			</p>


			<p>
				<button type="submit" name="submit">Log In</button>
			</p>

			<?php 
				if(isset($errors) && !empty($errors)){
					echo "<a href=\"#\">Forget Password?</a>";
				}
			 ?>
			
		</fieldset>
		</form> 		


 	</div>  <!-- login -->

	
</body>
</html>
