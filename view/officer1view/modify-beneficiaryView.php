<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/modify-beneficiaryInc.php");
?>

<?php 
	//checking if a user is logged in
	// if(!isset($_SESSION['user_id'])){
	// 	header('Location: index.php');
	// }
 ?>
<!-- form validation -->


<!DOCTYPE html>
<html>
<head>
	<meta name="pagedata" tab="dash" type="" title="Add Beneficiary">
	<title>Modify User</title>
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css">
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >
	<!-- <link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" > -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
	<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/yheader.inc.php"); ?>
	 <?php include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer1Inc/officer1_sidebarInc.php"); ?>?>

	 
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
		<form action="modify-beneficiaryView.php?<?php echo "Serial_No=".$Serial_No;?>" method="post" class ="userform">
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
