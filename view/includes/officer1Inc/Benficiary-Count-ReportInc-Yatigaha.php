<?php session_start(); ?>
<?php 
//   if(!isset($_SESSION['user_id'])){
//     header('Location:index.php');
//   }

  //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcReport.class.php");
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/bcreportfactory.class.php");
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");

  $fac = new BCReportFactory();
  $report = $fac->anOperation(1);
  // list($count_list,$total1,$total2,$total3,$total4,$total5,$total6,$total7,$total8,$total9,$total10,$total11,$total12,$total13,$total14,$total15) = $report->viewReport();
  $count_list = $report->ViewReport();
  if(isset($_POST['submit'])){
    $data = ' <table class="masterlist">
          <h2><span>සමුර්ධි සහනාධාර දීමනා බැංකු උපරිම වාර්තාව </span></h2>
          <h3><?php echo date("y/m/d") ; ?> (සහනාධාර මුදල් බැර කිරීම සඳහා)</h3>
          <h4>දිස්ත්‍රික්කය :- ගම්පහ </h4>
		  <h3>ප්‍රාදේශීය ලේකම් කාර්යාලය - දිව්ලපිටිය </h3>
          <caption><h3>සමුර්ධි ප්‍රජාමූල බැංකුවේ නම :- යටිගහ </h3></caption>
          <tr>
            <th rowspan="2">අනු අංකය </th>
            <th rowspan="2">වසමේ නම </th>
            <th colspan="5">දාල දීමනා වර්ගයට අයත් ප්‍රතිලබීන් ගණන </th>
            <th rowspan="2">මුළු ප්‍රතිලාභීන් ගණන</th>
          </tr>
          <tr>
            <td style="background-color: #848382; color:white;">420</td>
            <td style="background-color: #848382; color:white;">1320</td>
            <td style="background-color: #848382; color:white;">1220</td>
            <td style="background-color: #848382; color:white;">2120</td>
            <td style="background-color: #848382; color:white;">3020</td>
          </tr><tr>';
          $data .= $count_list;
          $data .= '</tr></table>';
      $report->printReport($data);
  }


 ?>



