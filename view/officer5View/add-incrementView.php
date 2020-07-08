<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/add-incrementInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Salary Increment</title>
    
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
        <h1>Add Salary Increment</h1>
        
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

        <form action="add-incrementView.php" method="post" class="memberform" >

            <input type="hidden" name="nic_number" value="<?php echo $nic_number; ?>">
            <p>
                <label for="">NIC Number:</label>
                <input type="text" name="nic_number" <?php echo 'value="' .$nic_number.'"';?>>            
            </p>
            <p>
                <label for="">Name:</label>
                <input type="text" name="name" <?php echo 'value="' .$name.'"';?> >            
            </p>
            <p>
                <label for="">Date of Appointment:</label>
                <input type="date" name="date_appointed" <?php echo 'value="' .$date_appointed.'"';?> >            
            </p>
            <p>
                <label for="">Current Salary:</label>
                <input type="int" name="salary" <?php echo 'value="' .$salary.'"';?> >            
            </p>
            <p>
                <label for="">Last Increment Value:</label>
                <input type="int" name="last_increment" <?php echo 'value="' .$last_increment.'"';?> >            
            </p>
            <p>
                <label for="">New Increment Value:</label>
                <input type="int" name="increment" <?php echo 'value="' .$increment.'"';?> >            
            </p>

            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
</body>
</html>