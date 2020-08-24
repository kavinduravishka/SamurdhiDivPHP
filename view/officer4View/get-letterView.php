<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/get-letterInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagedata" tab="task" type="report" title="View Letter">
    <title>Get Appreciation Letter View</title>
   


    <link rel="shortcut icon" href="/SamurdhiDivPHP/view/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >

    
</head>
<body>
    
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
   

    <?php 
    
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/dheader.inc.php");
    ?> 
	

    <main>
        <div class="search">
            <form action="get-letterView.php" method="get">
                <p>
                <input type="text" name="search" id="" placeholder="Type NIC or Name and Press Enter" value="" autofocus required>
                </p>
            </form>
        </div>
        
        

        <?php echo $report_data;?>
        
        
        <form action="get-letterView.php?<?php echo "search=".$search?>" method="post" class="letterform">
            <p>
                    <label for="">&nbsp;</label>
                    <button type="submit" name="submit">Print Report</button>
                            
            </p>
		</form>
        
        


    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
</body>
</html>