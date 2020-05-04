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

	

	//view the user
	if(isset($_GET['Serial_No'])){

		$Serial_No = mysqli_real_escape_string($connection,$_GET['Serial_No']);
		
		// if( $user_id == $_SESSION['user_id']){
		// 	//should not delete the current user
		// 	header('Location: users.php?cannot_delete_current_user');
		// }else{

			//deleting user
			$query = "UPDATE detailsofbenificiaries SET is_deleted = 1 WHERE Serial_No = {$Serial_No} LIMIT 1";
			$result = mysqli_query($connection,$query);
			if($result){
				//user deleted
				header('Location: users.php?msg=user_deleted');
			}else{
				header('Location: users.php?err=delete_failed');
			}
		

	} else {
		header('Location: users.php');
	}

	