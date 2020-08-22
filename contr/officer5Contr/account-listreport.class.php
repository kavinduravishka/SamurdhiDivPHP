<?php  

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer5DB/officer5DB.class.php");


class AccountListReport implements Report {

public function printReport($report_data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($report_data);

}

public function viewReport(){

    $accounts=array();

    $banks=array(
        'boc'=>'ලංකා බැංකුව',
        'nsb'=>'ජාතික ඉතිරි කිරීමේ බැංකුව ',
        'peoples_bank'=>'මහජන බැංකුව',
    );
    
    $dop=date("Y/m",time());
    
    if(isset($_GET['bank'])){        

        $bank=$_GET['bank']; 
        
        $salary_records=(Officer5DB::getInstance())->getBankAccountDetails($bank);

        foreach($salary_records as $record){
            $account_line="";
            $account_line.="<tr>";
            $account_line.="<td style=\"border: 1px solid black;text-align:left;padding:5px;width: 200px;\">{$record['name']}</td>";
            $account_line.="<td style=\"border: 1px solid black;text-align:left; width: 150px;\">{$record['acc_no']}</td>";
            $account_line.="<td style=\"border: 1px solid black;text-align:right; width: 150px;\">{$record['net_pay']}</td>";
            $account_line.="</tr>";
            array_push($accounts,$account_line);
        }
        $dop=date("Y/m",time()); 
        
        $report_data = "";
        $report_data.="<div><br>";
        $report_data.="<h4 style=\"text-align: center\"><u>{$dop} මස වැටුප ගිණුම් අංක ඇමුණුම - {$banks[$bank]}</u></h4>";
        $report_data.="<div><table style=\"border-collapse: collapse;margin-left: auto;margin-right: auto;\">";
        $report_data.="<tr>";
        $report_data.="<th style=\"border: 1px solid black;text-align:center;padding:5px;width: 200px;\">Name of the Employee</th>";
        $report_data.="<th style=\"border: 1px solid black;text-align:center; width: 150px;\">Account Number</th>";
        $report_data.="<th style=\"border: 1px solid black;text-align:center; width: 150px;\">Net Payment Value(Rs.)</th>";
        $report_data.="</tr>";
        foreach($accounts as $account){
            $report_data.=$account;
        }
        $report_data.="</table></div></div>";
        return $report_data;
    }
    
    

    

}

}


?>