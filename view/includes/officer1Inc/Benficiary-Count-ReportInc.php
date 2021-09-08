<?php session_start();
  if($_SESSION['user_id']!=1){
        header('Location: /SamurdhiDivPHP/view/loginView.php');
    }
    
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/bcreportfactory.class.php");
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
  $type = $_GET['type'];
  $bank_zonals_array = array('','යටිගහ','බඩල්ගම','දිවුලපිටිය','දුනගහ','කටුවැල්ගම','කෝන්ගොඩමුල්ල','කොටදෙනියාව','වල්පිට','වෙලඟන');
  $fac = new BCReportFactory();
  $report = $fac->anOperation($type);
  $count_list = $report->ViewReport();
  if(isset($_POST['submit'])){
    $date=date("Y/m/d");
    $a = "<style>
            table.masterlist {
              font-family: arial, sans-serif;
              width: 100%;
              border-collapse: collapse;
              border: 1px solid black;
            }
            table.masterlist th,table.masterlist td {
              text-align: left;
              padding: 3px;
              border: 1px solid black;
            }
            table.masterlist tr:nth-child(even) {
              background-color: #dddddd;
              }
          </style>";
    $a .= "<div class=\"maincontainer\"><center><h2><span><u>සමුර්ධි සහනාධාර දීමනා බැංකු උපරිම වාර්තාව </u></span></h2></center>
          <h3>{$date}(සහනාධාර මුදල් බැර කිරීම සඳහා)</h3>
          <h4>දිස්ත්‍රික්කය :- ගම්පහ </h4>
          <h3>ප්‍රාදේශීය ලේකම් කාර්යාලය - දිව්ලපිටිය </h3>
      
          <caption><h3>සමුර්ධි ප්‍රජාමූල බැංකුවේ නම :- {$bank_zonals_array[$type]}</h3></caption>
          <div>
          <table class=\"masterlist\">
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
          </table></div>
          <p>ඉහත විස්තරය නිවැරදි බව සහතික කරමි.</p>
          <p>සකස් කළේ :- ...................................</p>
          <p>විෂය භාර කළමනාකරණ සහකාර </p>
          <p>වසම් උපරිමය අනුව විස්තරය නිවැරදි බවට සහතික කරමි.</p>
          <p>පරීක්ෂා කළේ :- ................................</p>
          <p>සමුර්ධි මුඋලස්ථාන කළමනාකරු.</p>
          <p>ඉහත තොරතුරු නිවැරදි බවට සහතික කරමි.</p>
          <p>............................................</p>
          <p>රාදේශීය ලේකම්,</p>
          <p>දිවුලපිටිය.</p>
          </div>";
    $report->printReport($a);
  }

