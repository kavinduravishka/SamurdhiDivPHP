<?php  

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer5DB\officer5DB.class.php");


class BankPayRequestReport implements Report {

public function printReport($report_data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($report_data);

}

public function viewReport(){

  $total_BOC=0;$total_NSB=0; $total_PEOPLES=0;
  $salary_records=(Officer5DB::getInstance())->getBankReportDetails();

  foreach($salary_records as $record){
    if($record['bank']=="boc"){$total_BOC+=$record['net_pay'];}
    else if($record['bank']=="nsb"){$total_NSB+=$record['net_pay'];}
    else if($record['bank']=="peoples"){$total_PEOPLES+=$record['net_pay'];}
  }

  $banks=array(
    'boc'=>'ලංකා බැංකුව',
    'nsb'=>'ජාතික ඉතිරි කිරීමේ බැංකුව ',
    'peoples_bank'=>'මහජන බැංකුව',
  );

  $bank_netpay=array(
    'boc'=>$total_BOC,
    'nsb'=>$total_NSB,
    'peoples_bank'=>$total_PEOPLES,
  );

  

  if(isset($_GET['bank'])){        

    $bank=$_GET['bank'];    
    $dop=date("Y/m",time()); 
    
    $report_data = "";
    $report_data.="<div><br>";
    $report_data.="<p style=\"margin-left: 15%;\">කලමනාකරු<br>{$banks[$bank]}<br>දිවුලපිටිය<br><br></p>";
    $report_data.="<h4 style=\"text-align: center\"><u>{$dop} මස වැටුප ඇමුණුමෙහි සදහන් ගිණුම් අංක වෙත එවීම.</u></h4>";
    $report_data.="<div style=\" text-justify: inter-word;text-align: justify;margin-left: 15%;margin-right: 15%;\">දිවුලපිටිය ප්‍රාදේශිය ලේකම්  කාර්යාලයට අනුයුක්තව සේවය කරන සමෘද්ධි කලමනාකරු/ සමෘද්ධි සංවර්ධන නිලධාරින්ගේ
    {$dop} මස වැටුප වන රු. {$bank_netpay[$bank]} ක  මුදල අදාළ ගිණුම් වෙත බැරකිරීමට කටයුතු කරන මෙන් ඉල්ලා සිටිමි.<br><a href=\"account-listView.php?bank={$bank}\">ගිණුම් අංක ඇමුණුම</a></div><br><br>";
    $report_data.="<p style=\"margin-left: 15%;\">......................................<br><br>ප්‍රාදේශීය ලේකම්<br>ප්‍රාදේශීය ලේකම් කාර්යාලය<br>දිවුලපිටිය<br>{$date}</p>";
    $report_data.="</div>";

    return $report_data;

    

  }
}

}


?>