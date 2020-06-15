<?php


class FND{



	public function in_main($inside){
		$division = <<<MAIN
						<main id="maincontainer">
							{$inside}
						</main>
MAIN;
		return $division;
	}

	public function in_table($inside){
		$division = <<<table
						<table id="main">
							{$inside}
						</table>
table;
		return $division;
	}

	public function in_form($name,$id,$action,$inside){
		$division = <<<form
						<form class="kform" action="{$action}" method="post" name="{$name}"
						id="{$id}" autocomplete="on">
							{$inside}
						</form>
form;
		return $division;
	}




//    ___ ___                     .___.____    .__                      _  _      _  _      _  _   
//   /   |   \   ____ _____     __| _/|    |   |__| ____   ____      __| || |____| || |____| || |__
//  /    ~    \_/ __ \\__  \   / __ | |    |   |  |/    \_/ __ \     \   __   /\   __   /\   __   /
//  \    Y    /\  ___/ / __ \_/ /_/ | |    |___|  |   |  \  ___/      |  ||  |  |  ||  |  |  ||  | 
//   \___|_  /  \___  >____  /\____ | |_______ \__|___|  /\___  >    /_  ~~  _\/_  ~~  _\/_  ~~  _\
//         \/       \/     \/      \/         \/       \/     \/       |_||_|    |_||_|    |_||_|  




	public function insert_headline($headline,$subline){
		$division =	<<<EOD
						<div class="headdiv">
							<div class="headline">
								<h1>{$headline}</h1>
							</div>

							<div class="subline">
								<h3>{$subline}</h3>
							</div>
						</div>
EOD;
		return $division;
	}





//  ___________              __  .____    .__                      _  _      _  _      _  _      _  _   
//  \__    ___/___ ___  ____/  |_|    |   |__| ____   ____      __| || |____| || |____| || |____| || |__
//    |    |_/ __ \\  \/  /\   __\    |   |  |/    \_/ __ \     \   __   /\   __   /\   __   /\   __   /
//    |    |\  ___/ >    <  |  | |    |___|  |   |  \  ___/      |  ||  |  |  ||  |  |  ||  |  |  ||  | 
//    |____| \___  >__/\_ \ |__| |_______ \__|___|  /\___  >    /_  ~~  _\/_  ~~  _\/_  ~~  _\/_  ~~  _\
//               \/      \/              \/       \/     \/       |_||_|    |_||_|    |_||_|    |_||_|  





	public function insert_textin($label,$name,$id,$type="text",$maxlen=0,$minlen=0,$value="",
		$size=70,$required=0){
		
		if($required==1){
			$reqspan=<<<RSPAN
<span class="reqspan">*</span>
RSPAN;
			$tipspan=<<<TSPAN
<span class="tooltiptext" id="span_{$id}">Required Field, Can not be empty</span>
TSPAN;
			$classva=<<<CLASSVA
class="js_reuired"
CLASSVA;

		}else if($required==0){
			$reqspan="";
			$tipspan="";
			$classva="";

		}

//====================MAXLENGTH===================
		if($maxlen==0){
			$maxlen="";
		}else{
			$maxlen=<<<MAX
maxlength="{$maxlen}"
MAX;
		}

//====================MINLENGTH===================
		if($minlen==0){
			$minlen="";
		}else{
			$minlen=<<<MIN
minlength="{$minlen}"
MIN;
		}

		$division = <<<EOD
						<tr>
							<td class="ldiv" >
						        {$label}{$reqspan}						        
						    </td>

							<td class="indiv" >
								<input {$classva} type="{$type}" name="{$name}" id="{$id}" value="{$value}" 
								size="{$size}" {$maxlen} {$minlen}/>{$tipspan}
							</td>
						</tr>
EOD;
		return $division;
	}




//  ___________              __     _____                               _  _      _  _      _  _   
//  \__    ___/___ ___  ____/  |_  /  _  \_______   ____ _____       __| || |____| || |____| || |__
//    |    |_/ __ \\  \/  /\   __\/  /_\  \_  __ \_/ __ \\__  \      \   __   /\   __   /\   __   /
//    |    |\  ___/ >    <  |  | /    |    \  | \/\  ___/ / __ \_     |  ||  |  |  ||  |  |  ||  | 
//    |____| \___  >__/\_ \ |__| \____|__  /__|    \___  >____  /    /_  ~~  _\/_  ~~  _\/_  ~~  _\
//               \/      \/              \/            \/     \/       |_||_|    |_||_|    |_||_|  




	public function insert_textarea($label,$name,$id,$value="",$required=0){
		
		if($required==1){
			$reqspan=<<<RSPAN
<span class="reqspan" >*</span>
RSPAN;
			$tipspan=<<<TSPAN
<span class="tooltiptext" id="span_{$id}">Required Field, Can not be empty</span>
TSPAN;
			$classva=<<<CLASSVA
class="js_reuired"
CLASSVA;

		}else if($required==0){
			$reqspan="";
			$tipspan="";
			$classva="";
		}


		$division = <<<EOD
						<tr>
							<td class="ldiv">
						        {$label}{$reqspan}
						    </td>

						    <td class="indiv">
						          <textarea {$classva} cols="60" rows="6" name="{$name}" id="{$id}" value="{$value}" ></textarea>{$tipspan}
						    </td>
						</tr>
EOD;
		return $division;
	}





//    _________      .__                 __  .____    .__          __          _  _      _  _      _  _   
//   /   _____/ ____ |  |   ____   _____/  |_|    |   |__| _______/  |_     __| || |____| || |____| || |__
//   \_____  \_/ __ \|  | _/ __ \_/ ___\   __\    |   |  |/  ___/\   __\    \   __   /\   __   /\   __   /
//   /        \  ___/|  |_\  ___/\  \___|  | |    |___|  |\___ \  |  |       |  ||  |  |  ||  |  |  ||  | 
//  /_______  /\___  >____/\___  >\___  >__| |_______ \__/____  > |__|      /_  ~~  _\/_  ~~  _\/_  ~~  _\
//          \/     \/          \/     \/             \/       \/              |_||_|    |_||_|    |_||_|  



public function insert_select($label,$name,$id,$arr,$required=0){
		
		if($required==1){
			$reqspan=<<<RSPAN
<span class="reqspan" >*</span>
RSPAN;
			$tipspan=<<<TSPAN
<span class="tooltiptext" id="span_{$id}">Required Field, Can not be empty</span>
TSPAN;
			$classva=<<<CLASSVA
class="js_reuired"
CLASSVA;

		}else if($required==0){
			$reqspan="";
			$tipspan="";
			$classva="";
		}

		$optionlist="";

		foreach ($arr as $key => $val) {
			$optionlist.=<<<OPTION
<option value="{$val}">{$key}</option>
OPTION;
		}

		$division = <<<EOD
						<tr>
							<td class="ldiv">
						        {$label}{$reqspan}
						    </td>

						    <td class="indiv">
						          	<select {$classva} name="{$name}" id="{$id}" >
						          		{$optionlist}
						          	</select>
						          	{$tipspan}
						    </td>
						</tr>
EOD;
		return $division;
	}






//    _________    ___.           .__  __ __________   __                 _  _      _  _      _  _   
//   /   _____/__ _\_ |__   _____ |__|/  |\______   \_/  |_  ____      __| || |____| || |____| || |__
//   \_____  \|  |  \ __ \ /     \|  \   __\    |  _/\   __\/    \     \   __   /\   __   /\   __   /
//   /        \  |  / \_\ \  Y Y  \  ||  | |    |   \ |  | |   |  \     |  ||  |  |  ||  |  |  ||  | 
//  /_______  /____/|___  /__|_|  /__||__| |______  / |__| |___|  /    /_  ~~  _\/_  ~~  _\/_  ~~  _\
//          \/          \/      \/                \/            \/       |_||_|    |_||_|    |_||_|  



	public function btnSub(){
		$division = <<<EOD
						<tr>
							<td class="btndiv">
						        <input type="submit" value="Submit">
						    </td>

						    <td>
						          
						    </td>
						</tr>
EOD;
		return $division;
	}


	public function btnFinNext(){
		$division = <<<EOD
						<tr>
							<td class="btndiv">
						        <input type="submit" value="Finish">
						    </td>

						    <td class="btndiv">
						        <input type="submit" value="Next">
						    </td>
						</tr>
EOD;
		return $division;
	}

	public function btnFind(){
		$division = <<<EOD
						<tr>
							<td class="btndiv">
						        <input type="submit" value="Find">
						    </td>

						    <td>
						          
						    </td>
						</tr>
EOD;
		return $division;
	}

}