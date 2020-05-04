<?php session_start(); ?> 
<?php require_once('inc/connection_userdb.php'); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
		header('Location: index.php');
	}
	$user_list = '';

	//getting the list of users
	$query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 ORDER BY Serial_No";
	$users = mysqli_query($connection,$query);
	$user_list = "";
	if($users){
		while($user = mysqli_fetch_assoc($users)){
			$user_list .= "<tr>";
			$user_list .= "<td>{$user['Serial_No']}</td>";
			$user_list .= "<td>{$user['Divisional_Secretariat']}</td>";
			$user_list .= "<td>{$user['Bank_Zonal']}</td>";
			$user_list .= "<td>{$user['GN_Division']}</td>";
			$user_list .= "<td>{$user['GN_Code_Mapping']}</td>";
			$user_list .= "<td>{$user['Householder_Name']}</td>";
			$user_list .= "<td>{$user['Address']}</td>";
			$user_list .= "<td>{$user['NIC']}</td>";
			$user_list .= "<td>{$user['Noof_Family_Members']}</td>";
			$user_list .= "<td>{$user['Bank_Account_No']}</td>";
			$user_list .= "<td>{$user['Relief_Account']}</td>";
			$user_list .= "<td>{$user['Starting_Year']}</td>";
			$user_list .= "<td><a href=\"modify-user.php?Serial_No={$user['Serial_No']}\">Edit</a></td>";
			$user_list .= "<td><a href=\"delete-user.php?Serial_No={$user['Serial_No']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
			$user_list .= "</tr>";
		}
	}else{
		echo "Database query failed";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body>
	<?php require_once('inc/header.php') ?>
	<?php require_once('inc/sidebar.php') ?>

	

    
	<main >
		<div class="maincontainer" >
		<h1>Users </h1>
		<table class="masterlist">
			<tr><th>Serial No</th><th>Divisional Secretariat</th><th>Bank Zonal</th><th>G.N Division</th><th>G.N_Code Mapping</th><th>Householder Name</th><th>Address</th><th>NIC</th><th>No.of Family Members</th><th>BankAccount No</th><th>Relief Account</th><th>Starting Year</th><th>Edit</th><th>Delete</th></tr>
			<?php echo $user_list; ?>
		</table>
	</main>
</body>
</html>
<?php mysqli_close($connection); ?>