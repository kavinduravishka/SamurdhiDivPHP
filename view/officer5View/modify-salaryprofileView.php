<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/modify-salaryprofileInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify Salary Profile</title>
    
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
        <h1>Modify Salary Profile</h1>
        
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

        <form action="modify-salaryprofileView.php" method="post" class="memberform" >

            <input type="hidden" name="emp_no" value="<?php echo $emp_no; ?>">
            <p>
                <label for="">Emp No:</label>
                <input type="text" name="emp_no" id="nums" <?php echo 'value="' .$emp_no.'"';?>>            
            </p>
            <p>
                <label for="">Name:</label>
                <input type="text" name="name" <?php echo 'value="' .$name.'"';?> >            
            </p>
            <p>
                <label for="">Designation:</label>
                <input type="text" name="designation" <?php echo 'value="' .$designation.'"';?> >            
            </p>

            <script>
            function setSelectedIndex(s, valsearch){
                for (i = 0; i< s.options.length; i++){ 
                    if (s.options[i].value == valsearch){
                        s.options[i].selected = true;
                        break;
                    }
                }
                return;
            }
            setSelectedIndex(document.getElementById("bank"),$bank);
            </script>
            <p>
                <label for="">Bank of the account:</label>
                <select id="bank" name="bank" >
                    <option value="boc">Bank Of Ceylon(BOC)</option>
                    <option value="nsb">National Savings Bank(NSB)</option>
                    <option value="peoples">Peoples Bank</option>
                </select>            
            </p>
            <p>
                <label for="">Bank Account Number:</label>
                <input type="text" name="acc_no" id="nums" <?php echo 'value="' .$acc_no.'"';?> >            
            </p>
            <p><b>Earnings</b></p>
            <p>
                <label for="" id="sub_lbl">Basic Salary:</label>
                <input type="int" name="basic_salary" id="nums" <?php echo 'value="' .$basic_salary.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Interim Allowance:</label>
                <input type="int" name="interim_allo" id="nums" <?php echo 'value="' .$interim_allo.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Language Allownce:</label>
                <input type="int" name="language_allo" id="nums" <?php echo 'value="' .$language_allo.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Living Cost:</label>
                <input type="int" name="living_cost" id="nums" <?php echo 'value="' .$living_cost.'"';?> >            
            </p>
            <p><b>Deductions</b></p>
            <p>
                <label for=""id="sub_lbl">W & OP:</label>
                <input type="int" name="w_op" id="nums" <?php echo 'value="' .$w_op.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Agrahara:</label>
                <input type="int" name="agrahara" id="nums" <?php echo 'value="' .$agrahara.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Stamp value:</label>
                <input type="int" name="stamp" id="nums" <?php echo 'value="' .$stamp.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Union Value:</label>
                <input type="int" name="union" id="nums" <?php echo 'value="' .$union.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Other Loan:</label>
                <input type="int" name="other_loan" id="nums" <?php echo 'value="' .$other_loan.'"';?> >            
            </p>
            <p>
                <label for=""id="sub_lbl">Special Advance:</label>
                <input type="int" name="special_advance"  id="nums" <?php echo 'value="' .$special_advance.'"';?> >            
            </p>
            <p>
                <label for="">Net Payment:</label>
                <input type="int" name="net_pay" id="nums" <?php echo 'value="' .$net_pay.'"';?> >                
                <button type="submit" name="calculate" id="cal">Calculate</button>                 
            </p>

            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
</body>
</html>