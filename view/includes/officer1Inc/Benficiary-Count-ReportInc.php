<?php session_start(); 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/bcreportfactory.class.php");
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
  $type = $_GET['type'];
  $fac = new BCReportFactory();
  $report = $fac->anOperation($type);
  $count_list = $report->ViewReport();
  if(isset($_POST['submit'])){
//     '<html><head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">' . $style . '</head><body>
// </body>
// </html>'
    $a = "<div><table class=\"masterlist\"><center><h2><span><u>සමුර්ධි සහනාධාර දීමනා බැංකු උපරිම වාර්තාව </u></span></h2></center>
		  <br><br>
          <h3><?php echo date(\"y/m/d\") ; ?> (සහනාධාර මුදල් බැර කිරීම සඳහා)</h3>
          <h4>දිස්ත්‍රික්කය :- ගම්පහ </h4>
		  <h3>ප්‍රාදේශීය ලේකම් කාර්යාලය - දිව්ලපිටිය </h3>
          <caption><h3>සමුර්ධි ප්‍රජාමූල බැංකුවේ නම :- යටිගහ </h3></caption>
          <tr>
            <th rowspan=\"2\">අනු අංකය </th>
            <th rowspan=\"2\">වසමේ නම </th>
            <th colspan=\"5\">අදාල දීමනා වර්ගයට අයත් ප්‍රතිලබීන් ගණන </th>
            <th rowspan=\"2\">මුළු ප්‍රතිලාභීන් ගණන</th>
          </tr>
          <tr>
            <td style=\"background-color: #848382; color:white;\">420</td>
            <td style=\"background-color: #848382; color:white;\">1320</td>
            <td style=\"background-color: #848382; color:white;\">1220</td>
            <td style=\"background-color: #848382; color:white;\">2120</td>
            <td style=\"background-color: #848382; color:white;\">3020</td>
          </tr>
          <tr>. $count_list.</tr>
          </table></div>";
    $report->printReport($a);
  }