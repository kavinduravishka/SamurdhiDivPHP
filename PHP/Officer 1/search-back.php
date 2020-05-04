<?php session_start(); ?> 
<?php require_once('inc/connection_userdb.php'); ?>

<?php 
	if(isset(($_GET['q']))){
		$q = $_GET['q'];

	// mysqli_select_db($connection , "detailsofbenificiaries");
	$sql = "SELECT * FROM detailsofbenificiaries WHERE is_deleted = 0 AND Householder_Name='{$q}'";



	$result = mysqli_query($connection,$sql);

	$user_list = '<table class = "masterlist"><tr><th>Serial No</th><th>Divisional Secretariat</th><th>Bank Zonal</th><th>G.N Division</th><th>G.N_Code Mapping</th><th>Householder Name</th><th>Address</th><th>NIC</th><th>No.of Family Members</th><th>BankAccount No</th><th>Relief Account</th><th>Starting Year</th></tr>';
	if($result){
		while($user = mysqli_fetch_assoc($result)){
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
			$user_list .= "</tr>";
	}
	$user_list .= '</table>';
	}else{
		$user_list .= "query failed!!!";
	}
	

	echo $user_list;

	mysqli_close($connection);
	}
	

 ?>

