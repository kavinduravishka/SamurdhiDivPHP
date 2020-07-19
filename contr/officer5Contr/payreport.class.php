<?php  

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");


class PayReport implements Report {

public function printReport($report_data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($report_data);

}

public function viewReport(){

  
    $report_data = "";

    $report_data.="<main>";
        $report_data.="<h2>Monthly Pay Report</h2>";

        $report_data.="<form action='monthly-payreportView.php' method='post' class='memberform' >";

        $report_data.="<input type='hidden' name='emp_no' <?php echo 'value={$emp_no};?> >";
            $report_data.="<p>";
                $report_data.="<center><input type='text' name='name' id='nums' <?php echo 'value='20' {$month};?> >  මාසයේ වැටුප් විස්තරය</center>";
            $report_data.="</p>";
            $report_data.="<p>";
                $report_data.="<label for=\"\">නම/Name:</label>";
                $report_data.="<input type='text' name='name' <?php echo 'value= {$name};?>readonly >";
            $report_data.="</p>";
            $report_data.="<p>";
                $report_data.="<label for=\"\">තනතුර/Designation :</label>";
                $report_data.="<input type='text' name='designation' <?php echo 'value= {$designation}';?>readonly >" ;           ;
            $report_data.="</p>";
            $report_data.="<p><b>වැටුප/Earnings</b></p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\" id='sub_lbl'>ඒකාබද්ධ වැටුප /Basic Salary:</label>";
                $report_data.="<input type='int' name='basic_salary' id='nums' <?php echo 'value={$basic_salary};?> readonly>";
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\" id='sub_lbl'>විශේෂ දීමනාව /Interim Allowance:</label>";
                $report_data.="<input type='int' name='nterim_allo' id='nums' <?php echo 'value={$interim_allo}';?>readonly >";            
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\"id='sub_lbl'>භාෂා දීමනාව /Language Allownce:</label>";
                $report_data.="<input type='int' name='language_allo' id='nums' <?php echo 'value={$language_allo};?> readonly>";            
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\"id='sub_lbl'>ජීවන වියදම් දීමනාව /Living Cost:</label>";
                $report_data.="<input type='int' name='living_cost' id='nums' <?php echo 'value={$living_cost};?> readonly>";            
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">දළ වැටුප(රු.) /Gross Payment:</label>";
                $report_data.="<input type='int' name='gross_pay' id='enums' <?php echo 'value={$gross_pay};?> readonly>";
            $report_data.="</p>";
            $report_data.="<p><b>අඩු කිරීම් /Deductions</b></p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">වැ.අ.වි.වැ. /W & OP:</label>";
                $report_data.="<input type='int' name='w_op' id='nums' <?php echo 'value={$w_op}';?> readonly>";          
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">අග්‍රහාර රක්ෂණය /Agrahara:</label>";
                $report_data.="<input type='int' name='agrahara' id='nums' <?php echo 'value={$agrahara}';?> readonly>";            
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">මුද්දර /Stamp value:</label>";
                $report_data.="<input type='int' name='stamp' id='nums' <?php echo 'value={$stamp}';?>readonly >";           
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">වර්තීය සමිති දායක මුදල් /Union Value:</label>";
                $report_data.="<input type='int' name='union' id='nums' <?php echo 'value={$union}';?>readonly >";           
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">ණය/පොලිය /Other Loan:</label>";
                $report_data.="<input type='int' name='other_loan' id='nums' <?php echo 'value={$other_loan}';?>readonly >";
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">විශේෂ අත්තිකාරම් /Special Advance:</label>";
                $report_data.="<input type='int' name='special_advance'  id='nums' <?php echo 'value={$special_advance}';?>readonly >";           
            $report_data.="</p>";
            $report_data.="</p>";
                $report_data.="<label for=\"\">ඉතිරි වැටුප(රු.) /Net Payment:</label>";
                $report_data.="<input type='int' name='net_pay' id='nums' <?php echo 'value={$net_pay}';?>readonly >";                             
            $report_data.="</p>";           
        $report_data.="</form>";
    $report_data.="</main>";
  
    return $report_data;

  }

}


?>