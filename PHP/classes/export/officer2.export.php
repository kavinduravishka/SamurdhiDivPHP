 
<?php

include './../../lib/vendor/autoload.php';

class pdfExport{

	public function exportMFR($data){
		
		$table=''<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-o5vb{border-color:#fe0000;text-align:left;vertical-align:top}
.tg .tg-ryhj{border-color:#fe0000;text-align:center;vertical-align:top}
.tg .tg-zahu{border-color:#fe0000;text-align:right;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-o5vb" rowspan="2"><br>Sequence<br>number<br></th>
    <th class="tg-o5vb" rowspan="3"><br>Samurdhi<br>Community<br>Based<br>Bank</th>
    <th class="tg-o5vb" colspan="9">Number of beneficiaries belong to considered type of allowance</th>
  </tr>
  <tr>
    <td class="tg-o5vb" colspan="2">420/-</td>
    <td class="tg-o5vb" colspan="2">1500/-</td>
    <td class="tg-o5vb" colspan="2">2500/-</td>
    <td class="tg-o5vb" colspan="2">3500/-</td>
    <td class="tg-o5vb"></td>
  </tr>
  <tr>
    <td class="tg-o5vb"></td>
    <td class="tg-o5vb"></td>
    <td class="tg-o5vb">240/-</td>
    <td class="tg-o5vb"></td>
    <td class="tg-o5vb">100/-</td>
    <td class="tg-o5vb"></td>
    <td class="tg-o5vb">200/-</td>
    <td class="tg-o5vb"></td>
    <td class="tg-o5vb">300/-</td>
    <td class="tg-o5vb">Total</td>
  </tr>
  <tr>
    <td class="tg-ryhj">1</td>
    <td class="tg-o5vb">Yatigaha</td>
    <td class="tg-zahu"> '	. 	$data['Yatigaha'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Yatigaha'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Yatigaha'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Yatigaha'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Yatigaha'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Yatigaha'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Yatigaha'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Yatigaha'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Yatigaha'][0]*240 +
    					 		$data['Yatigaha'][1]*100 +
    					 		$data['Yatigaha'][2]*200 +
    					 		$data['Yatigaha'][3]*300
    					 									.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">2</td>
    <td class="tg-o5vb">Badalgama</td>
    <td class="tg-zahu"> '	. 	$data['Badalgama'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Badalgama'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Badalgama'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Badalgama'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Badalgama'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Badalgama'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Badalgama'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Badalgama'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Badalgama'][0]*240 +
    					 		$data['Badalgama'][1]*100 +
    					 		$data['Badalgama'][2]*200 +
    					 		$data['Badalgama'][3]*300
    					 									.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">3</td>
    <td class="tg-o5vb">Kongodamulla</td>
    <td class="tg-zahu"> '	. 	$data['Kongodamulla'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Kongodamulla'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Kongodamulla'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Kongodamulla'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Kongodamulla'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Kongodamulla'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Kongodamulla'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Kongodamulla'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Kongodamulla'][0]*240 +
    					 		$data['Kongodamulla'][1]*100 +
    					 		$data['Kongodamulla'][2]*200 +
    					 		$data['Kongodamulla'][3]*300
    					 										.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">4</td>
    <td class="tg-o5vb">Katuwellegama</td>
    <td class="tg-zahu"> '	. 	$data['Katuwellegama'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Katuwellegama'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Katuwellegama'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Katuwellegama'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Katuwellegama'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Katuwellegama'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Katuwellegama'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Katuwellegama'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Katuwellegama'][0]*240 +
    					 		$data['Katuwellegama'][1]*100 +
    					 		$data['Katuwellegama'][2]*200 +
    					 		$data['Katuwellegama'][3]*300
    					 										.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">5</td>
    <td class="tg-o5vb">Welangana</td>
    <td class="tg-zahu"> '	. 	$data['Welangana'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Welangana'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Welangana'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Welangana'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Welangana'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Welangana'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Welangana'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Welangana'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Welangana'][0]*240 +
    					 		$data['Welangana'][1]*100 +
    					 		$data['Welangana'][2]*200 +
    					 		$data['Welangana'][3]*300
    					 									.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">6</td>
    <td class="tg-o5vb">Dunagaha</td>
    <td class="tg-zahu"> '	. 	$data['Dunagaha'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Dunagaha'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Dunagaha'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Dunagaha'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Dunagaha'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Dunagaha'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Dunagaha'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Dunagaha'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Dunagaha'][0]*240 +
    					 		$data['Dunagaha'][1]*100 +
    					 		$data['Dunagaha'][2]*200 +
    					 		$data['Dunagaha'][3]*300
    					 									.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">7</td>
    <td class="tg-o5vb">Kotadeniyawa</td>
    <td class="tg-zahu"> '	. 	$data['Kotadeniyawa'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Kotadeniyawa'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Kotadeniyawa'][0]*240 +
    					 		$data['Kotadeniyawa'][1]*100 +
    					 		$data['Kotadeniyawa'][2]*200 +
    					 		$data['Kotadeniyawa'][3]*300
    					 										.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">8</td>
    <td class="tg-o5vb">Divulapitiya</td>
    <td class="tg-zahu"> '	. 	$data['Divulapitiya'][0]		. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Divulapitiya'][0]*240	.	'</td>
    <td class="tg-zahu"> '	.	$data['Divulapitiya'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Divulapitiya'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Divulapitiya'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Divulapitiya'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Divulapitiya'][3]		.	'</td>
    <td class="tg-zahu"> '	.	$data['Divulapitiya'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Divulapitiya'][0]*240 +
    					 		$data['Divulapitiya'][1]*100 +
    					 		$data['Divulapitiya'][2]*200 +
    					 		$data['Divulapitiya'][3]*300
    					 										.	'</td>
  </tr>
  <tr>
    <td class="tg-ryhj">9</td>
    <td class="tg-o5vb">Walpita</td>
    <td class="tg-zahu"> '	. 	$data['Walpita'][0]			. 	'</td>
    <td class="tg-zahu"> '	. 	$data['Walpita'][0]*240		.	'</td>
    <td class="tg-zahu"> '	.	$data['Walpita'][1] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Walpita'][1]*100 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Walpita'][2] 		.	'</td>
    <td class="tg-zahu"> '	.	$data['Walpita'][2]*200 	.	'</td>
    <td class="tg-zahu"> '	.	$data['Walpita'][3]			.	'</td>
    <td class="tg-zahu"> '	.	$data['Walpita'][3]*300 	.	'</td>

    <td class="tg-zahu"> '	.	$data['Walpita'][0]*240 +
    					 		$data['Walpita'][1]*100 +
    					 		$data['Walpita'][2]*200 +
    					 		$data['Walpita'][3]*300
    					 									.	'</td>
  </tr>
  <tr>
    <td class="tg-o5vb"></td>
    <td class="tg-o5vb"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
    <td class="tg-zahu"></td>
  </tr>
</table>';
	}

}