<?php 
    include_once(realpath($_SERVER['DOCUMENT_ROOT'])."/SamurdhiDivPHP/view/includes/officer1Inc/add-beneficiaryInc.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="pagedata" tab="task" type="form" title="Add Beneficiary">
	<title>Add new User</title>
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main.css">
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
	<script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
	<?php include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/yheader.inc.php"); ?>
	 <?php include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer1Inc/officer1_sidebarInc.php"); ?>
	  
	<main>
		<div class="maincontainer">
		<h1>Add New Beneficiary</h1>

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
		<form action="add-beneficiaryView.php" method="post" class ="userform">
			<p>
				<label>	Divisional Secretariat:</label>
				<input type="text" name="Divisional_Secretariat" value="Divulapitiya">
			</p>

			<p>
				<label>Bank Zonal:</label>
				<select name="Bank_Zonal"  onchange="myFunction(this.value)">
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
				<select name="GN_Division" id="GN_Division">
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
				<label>G.N Code Mapping:</label> 
				<input type="text" name="GN_Code_Mapping" placeholder="xx-xx-xx" required>
			</p>
			<p>
				<label>Householder Name:</label> 
				<input type="text" name="Householder_Name" required>
			</p>
			
			<p>
				<label>Address:</label> 
				<input type="text" name="Address" required>
			</p>
			<p>
				<label>NIC:</label> 
				<input type="text" name="NIC" maxlength="12" required>
			</p>
			<p>
				<label>No.of Family Members:</label> 
				<input type="number" min="1" name="No_of_Family_Members" required>
			</p>
			<p>
				<label>Bank Account No:</label> 
				<input type="text" name="Bank_Account_No" placeholder="xxx-xxx-xxx" required>
			</p>
			<p>
				<label>Relief Ammount:</label> 
				<select name="Relief_Ammount">
					<option>420</option>
					<option>1320</option>
					<option>1220</option>
					<option>2120</option>
					<option>3020</option>
				</select>
			</p>
			<p>
				<label>Starting Year:</label> 
				<input type="date" name="Starting_Year" required>
			</p>
			<p>
				<label for="">&nbsp;</label>
				<button class="submit" name="submit">Save</button>
			</p>

		</form>
		</div>
	</main>
	 <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
	 <script>
	 	function myFunction(value) {
			var Yatigaha = ['41-Paranahalpe','41A-Paranahalpe','42A-Nariyamulla','42B-Gurullagama','43-Pahala-Kithulwala','43A-Ihala-Kithulwala','43B-Uthuru-Kithulwala','44-Waththemulla','44A-Ihala-Kithulgala','44B-Pahala-Kithulgala','45-Kuligedara','46-Pahala-Madithiyawala','46A-Pahala-Madithiyawala','47-Hangawaththa'];

			var Badalgama = ['Akaragama-East','Akaragama-West','Akaragama-North','Godigamuwa-West','Godigamuwa-East','Balawala','Badalgama','Delpakadawara','Sirigapathawatta','Pethigoda','Alugolla','Katukenda'];

			var Koongodamulla = ['Ambalayaya','Pahala-Madampella','East-Kaluwarippuwa-North','Koongodamulla-North','Koongodamulla-West','Koongodamulla-South','Bolagala','Koongodamulla-East','Ihala-Madampella-North','Otharawadiya','East-Kaluwarippuwa-South','Miriswatta'];

			var Katuwelgama = ['Kadawala North','Kadwala','Dagonna-North','Dagonna-East','Halgahawelawatta','Katuwelgama-North','Kadawala-South','Aluthepola-West','Thotillagahawatta','Katuwelgama-South','Palugahawela','Dagonna-South'];

			var Welangana = ['Lihiniyagammana','Ihala-Madampella-West','Iahala-Madampella-East','Ihalagama','Kehelella-South','Kehelella-North','Dewagura','Wekada','Kalumada','Welangana','Polhena','Mellwagedara'];

			var Dunagaha = ['Thammita','Palliyapitiya-West','Induragara-North','Induragara-South','Batepola','Doongaha-South','Doonagaha','Doonagaha','Palliyapitiya-East','Hunumulla','Urapana','Kelepitimulla','Sayakkaramulla','Henpitagedara','Hapuwalana-South'];

			var Kotadeniyawa = ['Kotadeniyawa','Erabadda','Diyagampala','Koradaminna','Divuldeniya','Paragoda-North','Poragoda-South','Moragalkanda','Nawana-West','Hettimulla','Halloluwa','Kelegedara','Nawana-East','Polwatta'];

			var Divulapitiya = ['Hapugahagama','Barawavila','Pinnakele','Pinnakele-South','Bomugammana-North','Bomugammana-South','Pinnalanda','Divulapitiya','Wewagedara','Horagasmulla'];

			var Walpita = ['Agalegedara','Waradala','Heeralugedara','Walpita','Kudagammana','Rassapana','Badalgalla-West','Parana-Handiya','Badagalla-West','Parana-Handiya','Balagalla-East','Ullapola-East','Ullapola-East','Ullapola-West'];

			var a;
			switch(value){
				case "Yatigaha":
					a = Yatigaha;
					break;
				case "Badalgama":
					a = Badalgama;
					break;
				case "Koongodamulla":
					a = Koongodamulla;
					break;
				case "Katuwelgama":
					a = Katuwelgama;
					break;
				case "Welangana":
					a = Welangana;
					break;
				case "Dunagaha":
					a = Dunagaha;
					break;
				case "Kotadeniyawa":
					a = Kotadeniyawa;
					break;
				case "Divulapitiya":
					a = Divulapitiya;
					break;
				case "Walpita":
					a = Walpita;
					break
			}

			var gn = document.getElementById("GN_Division");
			gn.options.length = 0;

			for(let i=0; i<a.length; i++){
				var x = document.createElement("OPTION");
				//x.setAttribute("value", "volvocar");
				var t = document.createTextNode(a[i]);
				x.appendChild(t);
				gn.appendChild(x);
			}
		}

	 </script>
</body>
</html>

