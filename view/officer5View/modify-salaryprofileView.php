<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/modify-salaryprofileInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagedata" tab="task" type="form" title="Modify Profile">
    <title>Modify Salary Profile</title>
    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >


    
    
</head>
<body>

    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
    

    <?php 
    
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/officer5_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/dheader.inc.php");
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

        <script type="text/javascript">
        function update()
        {
            var form = document.forms[0];
            var sum = eval(form.basic_salary.value)
                    + eval(form.interim_allo.value)
                    + eval(form.language_allo.value) 
                    + eval(form.living_cost.value)
                    + eval(form.w_op.value)
                    + eval(form.agrahara.value)
                    + eval(form.stamp.value)
                    + eval(form.union.value)
                    + eval(form.other_loan.value)
                    + eval(form.special_advance.value);
            form.net_pay.value = isNaN(sum) ? "" :sum;
        }
        </script>

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
            <p>
                <label for="">Bank of the account:</label>
                <select id="bank" name="bank" >
                    <option <?php if($bank == 'boc'){echo("selected");}?> value="boc">Bank Of Ceylon(BOC)</option>
                    <option <?php if($bank == 'nsb'){echo("selected");}?> value="nsb">National Savings Bank(NSB)</option>
                    <option <?php if($bank == 'peoples'){echo("selected");}?> value="peoples">Peoples Bank</option>
                </select>            
            </p>
            <p>
                <label for="">Bank Account Number:</label>
                <input type="text" name="acc_no" id="nums" <?php echo 'value="' .$acc_no.'"';?> >            
            </p>
            <p><b>Earnings</b></p>
            <p>
                <label for="" id="sub_lbl">Basic Salary:</label>
                <input type="int" name="basic_salary" id="nums" <?php echo 'value="' .$basic_salary.'"';?>onchange="update()" >            
            </p>
            <p>
                <label for=""id="sub_lbl">Interim Allowance:</label>
                <input type="int" name="interim_allo" id="nums" <?php echo 'value="' .$interim_allo.'"';?> onchange="update()">            
            </p>
            <p>
                <label for=""id="sub_lbl">Language Allownce:</label>
                <input type="int" name="language_allo" id="nums" <?php echo 'value="' .$language_allo.'"';?> onchange="update()">            
            </p>
            <p>
                <label for=""id="sub_lbl">Living Cost:</label>
                <input type="int" name="living_cost" id="nums" <?php echo 'value="' .$living_cost.'"';?> onchange="update()">            
            </p>
            <p><b>Deductions</b></p>
            <p>
                <label for=""id="sub_lbl">W & OP:</label>
                <input type="int" name="w_op" id="nums" <?php echo 'value="' .$w_op.'"';?> onchange="update()">            
            </p>
            <p>
                <label for=""id="sub_lbl">Agrahara:</label>
                <input type="int" name="agrahara" id="nums" <?php echo 'value="' .$agrahara.'"';?> onchange="update()" >            
            </p>
            <p>
                <label for=""id="sub_lbl">Stamp value:</label>
                <input type="int" name="stamp" id="nums" <?php echo 'value="' .$stamp.'"';?> onchange="update()">            
            </p>
            <p>
                <label for=""id="sub_lbl">Union Value:</label>
                <input type="int" name="union" id="nums" <?php echo 'value="' .$union.'"';?> onchange="update()">            
            </p>
            <p>
                <label for=""id="sub_lbl">Other Loan:</label>
                <input type="int" name="other_loan" id="nums" <?php echo 'value="' .$other_loan.'"';?> onchange="update()">            
            </p>
            <p>
                <label for=""id="sub_lbl">Special Advance:</label>
                <input type="int" name="special_advance"  id="nums" <?php echo 'value="' .$special_advance.'"';?> onchange="update()">            
            </p>
            <p>
                <label for="">Net Payment:</label>
                <input type="int" name="net_pay" id="enums" <?php echo 'value="' .$net_pay.'"';?> readonly="readonly">                
                <!-- <button type="submit" name="calculate" id="cal">Calculate</button>                  -->
            </p>

            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
</body>
</html>