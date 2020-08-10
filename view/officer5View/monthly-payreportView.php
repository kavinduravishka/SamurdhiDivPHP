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
        
        
        

        <?php echo $report_data;?>
        
        
        <form action="monthly-payreportView.php?<?php echo "emp_no=".$emp_no?>" method="post" class="letterform">
            <p>
                    <label for="">&nbsp;</label>
                    <button type="submit" name="submit">Print Report</button>
                            
            </p>
		</form>
        
        


    </main>
</body>
</html>