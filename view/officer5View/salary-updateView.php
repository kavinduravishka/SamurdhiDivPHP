<?php   
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/salary-updateInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagedata" tab="dash" >
    <title>Officer5-dashboard</title>
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
    
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer5Inc/officer5_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/dheader.inc.php");
    ?>  
	
	
	<main >
    <h1>Salary Records<span><a href="salary-updateView.php">| Refresh</a> </span></h1>

    <div class="search">
        <form action="salary-updateView.php" method="get">
            <p>
            <input type="text" name="search" id="" placeholder="Type Emp No or Name and Press Enter" value="<?php echo $search?>" autofocus required>
            </p>
        </form>
    </div>

    <div class="maincontainer" >		
            <center><table class="personalfile_list">

                <tr>
                    <th>Emp No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Modify</th>
                    <th>Delete</th>
                    <th>PayReport</th>
                </tr>

                <?php echo $salary_record ?>
            
            </center></table>
    </div>
    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
    
    
</body>
</html>