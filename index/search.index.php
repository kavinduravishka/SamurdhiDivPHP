<?php session_start(); ?> 
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Classes\Officer1.class.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="/myphp/CSS/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	  <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\header.inc.php"); ?>
	 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Includes\sidebar.inc.php"); ?>

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
	<script type="text/javascript" src="/myphp/JS/search-js.js"></script>
</body>
</html>