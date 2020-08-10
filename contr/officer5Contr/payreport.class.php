<?php  

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer5Contr\officer5.class.php");


class PayReport implements Report {

public function printReport($report_data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($report_data);

}

public function viewReport(){

    $month='';
    $description='';
    $emp_no='';
    $name='';
    $designation='';
    $basic_salary='';
    $interim_allo='';
    $language_allo='';
    $living_cost='';
    $gross_pay='';
    $w_op='';
    $agrahara='';
    $stamp='';
    $union='';
    $other_loan='';
    $special_advance='';
    $net_pay='';

    if(isset($_GET['emp_no'])){        

        $emp_no=$_GET['emp_no'];        
        $req_profile=Officer5::getSalaryProfile($emp_no);
        extract($req_profile);
        $dop=date("Y/m",time());
        $date=date("Y/m/d");
        

        $report_data = "";
        $report_data.="<div style=\"margin-left:30px;\">";
        $report_data.="<center><h3><span><u>Monthly Pay Report/ වැටුප් විස්තරය </u></span></h3></center><br>";
        $report_data.="<p style=\"margin-left: 15%;\">ප්‍රාදේශීය ලේකම් කාර්යාලය<br>දිවුලපිටිය<br>{$date}</p>";
        $report_data.="<p style=\"margin-left: 15%;\"></p>";            
        $report_data.="<p style=\"padding:5px; margin-left:15%;margin-right:auto; line-height:28px;\">නම/Name :{$name}<br>";
        $report_data.="තනතුර/Designation :{$designation}<br>";
        $report_data.="ඔබේ ඉල්ලීම පරිදි ඉදිරිපත් කිරීම සදහා {$dop} මාසයේ වැටුප් විස්තරය පහත දක්වමි.</p>";            
        $report_data.="<div style=\"margin-left: 30px;\";><table style=\"margin-left:15%;margin-right:auto;border-spacing:10px;\">";
        $report_data.="<tr><th><u>වැටුප</u></th><th style=\"text-align:right\";><u>රු.ශත</u></th><th></th></tr>";
        $report_data.="<tr><td style=\"padding:3px\"><u>වැටුප/Earnings<u></td><td></td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">ඒකාබද්ධ වැටුප /Basic Salary:</td><td style=\"text-align:right; width: 100px;\">{$basic_salary}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">විශේෂ දීමනාව /Interim Allowance:</td><td style=\"text-align:right; width: 100px; \">{$interim_allo}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">භාෂා දීමනාව /Language Allownce:</td><td style=\"text-align:right; width: 100px;\">{$language_allo}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">ජීවන වියදම් දීමනාව /Living Cost:</td><td style=\"text-align:right; width: 100px;\">{$living_cost}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">දළ වැටුප(රු.) /Gross Payment:</td><td></td><td style=\"text-align:right; width: 100px;\">{$gross_pay}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\"><u>අඩු කිරීම් /Deductions</u></td><td style=\"text-align:right; width: 100px;\"></td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">වැ.අ.වි.වැ. /W & OP:</td><td style=\"text-align:right; width: 100px;\">{$w_op}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">අග්‍රහාර රක්ෂණය /Agrahara:</td><td style=\"text-align:right; width: 100px;\">{$agrahara}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">මුද්දර /Stamp value</td><td style=\"text-align:right; width: 100px;\">{$stamp}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">වර්තීය සමිති දායක මුදල් /Union Value:</td><td style=\"text-align:right; width: 100px;\">{$union}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">ණය/පොලිය /Other Loan:</td><td style=\"text-align:right; width: 100px;\">{$other_loan}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">විශේෂ අත්තිකාරම් /Special Advance:</td><td style=\"text-align:right; width: 100px;\">{$special_advance}</td></tr>";
        $report_data.="<tr><td style=\"padding:3px\">ඉතිරි වැටුප(රු.) /Net Payment:</td><td></td><td style=\"text-align:right; width: 100px;\">{$net_pay}</td></tr>";
        $report_data.="</table></div></div>";
    
        return $report_data;

    }

  }

}


?>