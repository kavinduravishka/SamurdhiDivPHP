<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/personal-filesInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagedata" tab="dash" type="form" title="Add member">
    <title>Officer4-dashboard</title>

    <link rel="shortcut icon" href="/SamurdhiDivPHP/view/images/favicon.ico">    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    
</head>
<body>
    
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
    

    <?php 
    
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/dheader.inc.php");
    ?> 
	
	
	<main >
    <h1>Personal Files&nbsp; <span ><a href="personal-filesView.php" style="text-decoration: none;"><i class="fas fa-sync-alt"></i></a></span></h1>
    

    <div class="search">
        <form action="personal-filesView.php" method="get">
            <p>
            <input type="text" name="search" id="" placeholder="Type NIC or Name and Press Enter" value="<?php echo $search?>" autofocus required>
            </p>
        </form>
    </div>

    <div class="maincontainer" >		
            <center><table class="personalfile_list">

                <tr>
                    <th>NIC Number</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Service</th>
                    <th>Date of Appointment</th>
                    <th>Date of Birth</th>
                    <th>Date of Pension</th>
                    <th>No. of W & OP</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php echo $personalfile_list ?>
            
            </center></table>
    </div>
    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
    
    
</body>
</html>