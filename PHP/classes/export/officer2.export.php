 
<?php

include './../../lib/vendor/autoload.php';

class pdfExport{

	public function exportMFR($data,$year,$month){

		$mpdf = new \Mpdf\Mpdf();

		$benif240 =($data['Yatigaha'][0]+
					$data['Divulapitiya'][0]+
					$data['Walpita'][0]+
					$data['Kotadeniyawa'][0]+
					$data['Dunagaha'][0]+
					$data['Welangana'][0]+
					$data['Kongodamulla'][0]+
					$data['Katuwellegama'][0]+
					$data['Badalgama'][0]);

		$benif100 =($data['Yatigaha'][1]+
					$data['Divulapitiya'][1]+
					$data['Walpita'][1]+
					$data['Kotadeniyawa'][1]+
					$data['Dunagaha'][1]+
					$data['Welangana'][1]+
					$data['Kongodamulla'][1]+
					$data['Katuwellegama'][1]+
					$data['Badalgama'][1]);

		$benif200 =($data['Yatigaha'][2]+
					$data['Divulapitiya'][2]+
					$data['Walpita'][2]+
					$data['Kotadeniyawa'][2]+
					$data['Dunagaha'][2]+
					$data['Welangana'][2]+
					$data['Kongodamulla'][2]+
					$data['Katuwellegama'][2]+
					$data['Badalgama'][2]);

		$benif300 =($data['Yatigaha'][3]+
					$data['Divulapitiya'][3]+
					$data['Walpita'][3]+
					$data['Kotadeniyawa'][3]+
					$data['Dunagaha'][3]+
					$data['Welangana'][3]+
					$data['Kongodamulla'][3]+
					$data['Katuwellegama'][3]+
					$data['Badalgama'][3]);

		$total240 = $benif240*240;
		$total100 = $benif240*100;
		$total200 = $benif240*200;
		$total300 = $benif240*300;

		$totalOverall = $total240+$total300+$total200+$total100;
		
		$table='
		<p style="text-align: center;"><strong>සමෘද්ධි සහනාධාර දීමනා - අනිවාර්ය ඉතිරි කිරීම්</strong></p>
<p>ප්‍රාදේශීය ලේකම් කාර්යාලය :- දිවුලපිටිය<br />' . $year . ' ' . $month .' වන මාසය </p>
		<style type="text/css">
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
    <th class="tg-o5vb" rowspan="2"><br>අනු<br>අංකය<br></th>
    <th class="tg-o5vb" rowspan="3"><br>සමෘද්ධි<br>ප්‍රජාමූල<br>බැංකු</th>
    <th class="tg-o5vb" colspan="9">අදාල දීමනා වර්ගයට අයත් ප්‍රතිලාභීන් ගණන</th>
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
    <td class="tg-o5vb">යටිගහ</td>
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
    <td class="tg-o5vb">බඩල්ගම</td>
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
    <td class="tg-o5vb">කෝන්ගොඩමුල්ල</td>
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
    <td class="tg-o5vb">කටුවැල්ලේගම</td>
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
    <td class="tg-o5vb">වෙලගාන</td>
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
    <td class="tg-o5vb">දූනගහ</td>
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
    <td class="tg-o5vb">කොටදෙනියාව</td>
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
    <td class="tg-o5vb">දිවුලපිටිය</td>
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
    <td class="tg-o5vb">වල්පිට</td>
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
    <td class="tg-o5vb">එකතුව</td>
    <td class="tg-zahu"> ' .	$benif240 .	'</td>
    <td class="tg-zahu"> ' .	$total240 .	'</td>
    <td class="tg-zahu"> ' .	$benif100 .	'</td>
    <td class="tg-zahu"> ' .	$total100 . '</td>
    <td class="tg-zahu"> ' .	$benif200 .	'</td>
    <td class="tg-zahu"> ' .	$total200 .	'</td>
    <td class="tg-zahu"> ' .	$benif300 .	'</td>
    <td class="tg-zahu"> ' .	$total300 . '</td>
    <td class="tg-zahu"> ' .	$totalOverall .	'</td>
  </tr>
</table>

		 <p>සකස් කලේ :-.........................................................................<br />විෂය භාර කළමණාකරණ සහකාර<br />වසම් උපරිමය අනුව ඉහත විස්තරය නිවැරදි බව සහතික කරමි.<br />පරීක්ෂා කළේ :-.......................................................................<br />සමෘද්ධි මූලස්තාන කළමණාකරු :-...............................................</p>';

	$mpdf->WriteHTML($table);
	return $mpdf;
	}

}