<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/add-memberInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Personal-file</title>
    
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
        <h1>Add New Personal-File</h1>
        
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

        <form action="add-memberView.php" method="post" class="memberform" >
            <p>
                <label for="">NIC Number:</label>
                <input type="text" name="nic_number" <?php echo 'value="' .$nic_number.'"';?>>            
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
                <label for="">Service:</label>
                <input type="text" name="service" <?php echo 'value="' .$service.'"';?> >            
            </p>
            <p>
                <label for="">Date of Appointment:</label>
                <input type="date" name="date_appointed" <?php echo 'value="' .$date_appointed.'"';?> >            
            </p>
            <p>
                <label for="">Date of Birth:</label>
                <input type="date" name="date_of_birth" <?php echo 'value="' .$date_of_birth.'"';?> >            
            </p>
            <p>
                <label for="">Date of Pension:</label>
                <input type="date" name="date_of_pension" <?php echo 'value="' .$date_of_pension.'"';?> >            
            </p>
            <p>
                <label for="">Initial Salary:</label>
                <input type="int" name="salary" <?php echo 'value="' .$salary.'"';?> >            
            </p>
            <p>
                <label for="">No. of W & OP:</label>
                <input type="text" name="w_op_number" <?php echo 'value="' .$w_op_number.'"';?> >            
            </p>

            <p>
                <label for="">Type of the member:</label>
                <select name=member_type>
                    <option value="in">Inside Officer</option>
                    <option value="out">Field Officer</option>
                </select>
            </p>           
            
            
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
</body>
</html>