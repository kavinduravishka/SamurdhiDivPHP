<?php  

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer5DB/officer5DB.class.php");


class BankPayReport implements Report {

public function printReport($report_data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($report_data);

}

public function viewReport(){

    $total_BOC=0;$total_NSB=0; $total_PEOPLES=0;
    $count_BOC=0;$count_NSB=0;$count_PEOPLES=0;
    $dop=date("Y/m",time());
    
    $salary_records=(Officer5DB::getInstance())->getBankReportDetails();

    foreach($salary_records as $record){
      if($record['bank']=="boc"){
        $count_BOC+=1;
        $total_BOC+=$record['net_pay'];
      }
      else if($record['bank']=="nsb"){
        $count_NSB+=1;
        $total_NSB+=$record['net_pay'];
      }
      else if($record['bank']=="peoples"){
        $count_PEOPLES+=1;
        $total_PEOPLES+=$record['net_pay'];
      }

    }
    
    $report_data = "";
    $report_data.="<div><br>";
    $report_data.="<h3 style=\"text-align: center\"><u>Monthly Bank Pay Report</u></h3>";
    $report_data.="<h3 style=\"text-align: center\"><u>{$dop} මස වැටුප ගිණුම් අංක වෙත යැවීම.</u></h3><br>";            
    $report_data.="<div><table style=\"border-collapse: collapse;margin-left: auto;margin-right: auto;\">";
    $report_data.="<tr>";
    $report_data.="<th style=\"border: 1px solid black;text-align:center;padding:5px;width: 300px;\">The Bank</th>";
    $report_data.="<th style=\"border: 1px solid black;text-align:center; width: 150px;\">No of employees</th>";
    $report_data.="<th style=\"border: 1px solid black;text-align:center; width: 200px;\">Total value(Rs.)</th>";
    $report_data.="<th style=\"border: 1px solid black;text-align:center; width: 200px;\">Bank Request Letter</th>";
    $report_data.="</tr>";
    $report_data.="<tr>";
    $report_data.="<td style=\"border: 1px solid black;text-align:left;padding:5px;width: 300px;\">Bank of Ceylon(BOC)</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 150px;\">{$count_BOC}</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 200px;\">{$total_BOC}</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 150px;\"><a href=\"bank-requestreportView.php?bank=boc\">Bank Request Letter</a></td>";
    $report_data.="</tr>";
    $report_data.="<tr>";
    $report_data.="<td style=\"border: 1px solid black;text-align:left;padding:5px;width: 300px;\">Peoples Bank</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 150px;\">{$count_PEOPLES}</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 200px;\">{$total_PEOPLES}</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 150px;\"><a href=\"bank-requestreportView.php?bank=peoples_bank\">Bank Request Letter</a></td>";
    $report_data.="</tr>";
    $report_data.="<tr>";
    $report_data.="<td style=\"border: 1px solid black;text-align:left;padding:5px;width: 300px;\">National Savings Bank(NSB)</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 150px;\">{$count_NSB}</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 200px;\">{$total_NSB}</td>";
    $report_data.="<td style=\"border: 1px solid black;text-align:center; width: 150px;\"><a href=\"bank-requestreportView.php?bank=nsb\">Bank Request Letter</a></td>";
    $report_data.="</tr>";
    $report_data.="</table></div></div>";

    return $report_data;

    

  }

}


?>