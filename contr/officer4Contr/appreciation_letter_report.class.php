<?php  

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer4Contr/officer4.class.php");


class AppreciationLetterReport implements Report {

public function printReport($report_data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($report_data);

}

public function viewReport(){

    $input_data='';
    $name='';
    $date_entered=array();
    $particular=array();
    $punishment=array();
    $ref=array();

    if (isset($_GET['search'])){        

        $input_data=$_GET['search'];
        $user=Officer4::getInstance();        
        $records=$user->getAppLetterRecord($input_data);

        foreach($records as $record){
              $name=$record['name'];
              array_push($date_entered,$record['date']);
              array_push($particular,$record['particulars']);
              array_push($punishment,$record['punishment']);
              array_push($ref,$record['ref']);
        }

        $report_data = "";
        $report_data.="<div style=\"margin-left:30px\">";
        $report_data.="<h4 style=\"text-align: center\"><span><u>ප්‍රශංසා සහ දෝෂ දර්ශන/ COMMENDATIONS and CENSURES </u></span></h4><br>";
        $report_data.="<p style=\"margin-left: 15%;\"></p>"; 
        $report_data.="<p style=\"padding:5px;  line-height:28px;\">නම/Name :{$name}<br>";        
        $report_data.="<div style=\"margin-right:10%;padding: 6px;\">සටහන : දෝෂ දර්ශනයක් කළ සෑම විටකම ඒ බව නිළදාරියා වෙත දැනුම් දිය යුතුය.දෝෂ දර්ශනය සටහන් කළ යුත්තේ රතු තීන්තෙනි. නිළදාරියාට දන්වන ලද බවටද, ඔහු විසින් ඊට විරෝධය පළකරන ලද්දේ නම් , එය සලකාබලන බවට  සහ නිෂ්ප්‍රභා කරන ලද බවට ද සටහන් කළ යුතුය.</div>";
        $report_data.="<div style=\"margin-right:10%;padding: 6px;\">Note : Censures, which must be entered in red ink, should invariable be conveyed to the officer. A note should be made that this has been done and his protest if any, considered and overruled.</div></p>";
        $report_data.="<div style=\"margin-right:10%;\";><table style=\"border-collapse: collapse;width: 100%;overflow: wrap;margin-right:auto;border-spacing:10px;\">";
        $report_data.="<tr><th style=\"padding: 10px;border: 1px solid black;text-align: center;width:100px;\">දිනය/Date</th>";
        $report_data.="<th style=\"padding: 10px;border: 1px solid black;text-align: center;\">විස්තර කෙටියෙන්/ Brief Particulars</th>";
        $report_data.="<th style=\"padding: 10px;border: 1px solid black;text-align: center;\">කිසියම් දඩුවමක් කරන ලද්දේ නම් එය/ Punishments, if any</th>";
        $report_data.="<th style=\"padding: 10px;border: 1px solid black;text-align: center;\">අදාල ලිපි කඩදාසි වල යොමුව/ Reference to papers</th></tr>";   
        
        for ($i = 0; $i < count($date_entered); $i++)  {
            $report_data.="<tr><td style=\"text-align: center;border: 1px solid black;padding: 8px;\">{$date_entered[$i]}</td>";
            $report_data.="<td style=\"border: 1px solid black;padding: 8px;\">{$particular[$i]}</td>";
            $report_data.="<td style=\"border: 1px solid black;padding: 8px;\">{$punishment[$i]}</td>";
            $report_data.="<td style=\"border: 1px solid black;padding: 8px;\">{$ref[$i]}</td></tr>";
        }

        $report_data.="</table></div></div>";
    
        return $report_data;

    }
  }

}


?>