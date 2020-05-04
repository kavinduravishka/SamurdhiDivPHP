<?php session_start(); ?> 
<?php require_once('inc/connection_userdb.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	<?php require_once('inc/header.php') ?>
	<?php require_once('inc/sidebar.php') ?>

	<main>
		<div class="maincontainer">
			<h1 style="padding: 10px;">Search Benificiaries</h1>
			<form>
				<input type="text" size=30 placeholder="search" onkeyup="showResult(this.value)">
			</form>
			<br><br>
			<div id="txtHint">
			
			</div>
						
		</div>
	</main>

	<!-- JavaScript-->
	<script type="text/javascript" src="js/search-js.js"></script>
</body>
</html>