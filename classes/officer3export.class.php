<?php

include './../../lib/vendor/autoload.php';

class off3pdfExport{

	public function exportMFR($data,$year,$month){

		$mpdf = new \Mpdf\Mpdf();

		$table='<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-lqy6{text-align:right;vertical-align:top}
.tg .tg-y6fn{background-color:#c0c0c0;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-y6fn">Serial<br>No<br></th>
    <th class="tg-y6fn">Name of the beneficiary</th>
    <th class="tg-y6fn">Beneficiary<br>number<br></th>
    <th class="tg-y6fn">Date</th>
    <th class="tg-y6fn">Amount of<br>the payment</th>
    <th class="tg-y6fn">Name of assured</th>
    <th class="tg-y6fn">GNDiv<br></th>
    <th class="tg-y6fn">Reason</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-lqy6"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-lqy6"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-lqy6"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-lqy6"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-baqh"></td>
  </tr>
</tbody>
</table>'
	}
}


