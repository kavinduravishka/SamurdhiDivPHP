<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/monthly-payreportInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monthly Pay Report</title>
    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    
    
</head>
<body>
    <?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
    ?> 
	

    <main>
        <h2>Monthly Pay Report</h2>
        
        <?php 
            if(!empty($errors)){
                echo '<div class="errmsg">';
                echo '<b>There are error(s) in your form</b><br>';
                foreach ($errors as $error){
                    $error=ucfirst(str_replace("_"," ",$error));
                    echo $error .'<br>';
                }
                echo '</div>';
            }
        ?>

        <form action="monthly-payreportView.php" method="post" class="memberform" >

            <input type="hidden" name="emp_no" value="<?php echo $emp_no; ?>">
            <p>
                <center><input type="text" name="name" id="nums" <?php echo 'value="20""' .$month.'"';?> >  මාසයේ වැටුප් විස්තරය</center>
            </p>
            <p>
                <label for="">නම/Name:</label>
                <input type="text" name="name" <?php echo 'value="' .$name.'"';?>readonly >            
            </p>
            <p>
                <label for="">තනතුර/Designation :</label>
                <input type="text" name="designation" <?php echo 'value="' .$designation.'"';?>readonly >            
            </p>
            <p><b>වැටුප/Earnings</b></p>
            <p>
                <label for="" id="sub_lbl">ඒකාබද්ධ වැටුප /Basic Salary:</label>
                <input type="int" name="basic_salary" id="nums" <?php echo 'value="' .$basic_salary.'"';?> readonly>            
            </p>
            <p>
                <label for="" id="sub_lbl">විශේෂ දීමනාව /Interim Allowance:</label>
                <input type="int" name="interim_allo" id="nums" <?php echo 'value="' .$interim_allo.'"';?>readonly >            
            </p>
            <p>
                <label for=""id="sub_lbl">භාෂා දීමනාව /Language Allownce:</label>
                <input type="int" name="language_allo" id="nums" <?php echo 'value="' .$language_allo.'"';?> readonly>            
            </p>
            <p>
                <label for=""id="sub_lbl">ජීවන වියදම් දීමනාව /Living Cost:</label>
                <input type="int" name="living_cost" id="nums" <?php echo 'value="' .$living_cost.'"';?> readonly>            
            </p>
            <p>
                <label for="">දළ වැටුප(රු.) /Gross Payment:</label>
                <input type="int" name="gross_pay" id="enums" <?php echo 'value="' .$gross_pay.'"';?> readonly>            
            </p>
            <p><b>අඩු කිරීම් /Deductions</b></p>
            <p>
                <label for=""id="sub_lbl">වැ.අ.වි.වැ. /W & OP:</label>
                <input type="int" name="w_op" id="nums" <?php echo 'value="' .$w_op.'"';?> readonly>            
            </p>
            <p>
                <label for=""id="sub_lbl">අග්‍රහාර රක්ෂණය /Agrahara:</label>
                <input type="int" name="agrahara" id="nums" <?php echo 'value="' .$agrahara.'"';?> readonly>            
            </p>
            <p>
                <label for=""id="sub_lbl">මුද්දර /Stamp value:</label>
                <input type="int" name="stamp" id="nums" <?php echo 'value="' .$stamp.'"';?>readonly >            
            </p>
            <p>
                <label for=""id="sub_lbl">වර්තීය සමිති දායක මුදල් /Union Value:</label>
                <input type="int" name="union" id="nums" <?php echo 'value="' .$union.'"';?>readonly >            
            </p>
            <p>
                <label for=""id="sub_lbl">ණය/පොලිය /Other Loan:</label>
                <input type="int" name="other_loan" id="nums" <?php echo 'value="' .$other_loan.'"';?>readonly >            
            </p>
            <p>
                <label for=""id="sub_lbl">විශේෂ අත්තිකාරම් /Special Advance:</label>
                <input type="int" name="special_advance"  id="nums" <?php echo 'value="' .$special_advance.'"';?>readonly >            
            </p>
            <p>
                <label for="">ඉතිරි වැටුප(රු.) /Net Payment:</label>
                <input type="int" name="net_pay" id="enums" <?php echo 'value="' .$net_pay.'"';?> readonly>                                
            </p>

            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Print Report</button>
                          
            </p>
        </form>


    </main>
</body>
</html>