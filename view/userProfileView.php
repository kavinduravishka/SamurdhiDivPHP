<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/userProfileInc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagedata" tab="dash">
    <title>Modify Personal-file</title>
    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kheader.css" >
	<link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/kbody.css" >

    
</head>
<body>
    
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
    

    <?php 
    
    //include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/yheader.inc.php");
    ?> 

    <main>
        <h1>User Profile</h1>
        
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


        <form action="userProfileView.php" method="post" class="memberform" >
            
            <!-- <input type="hidden" name="user_id" value="<?php //echo $_SESSION['user_id']; ?>"> -->
            <p>
                <label for="">User Name:</label>
                <input type="text" name="user_name" <?php echo 'value="' .$user_name.'"';?> >            
            </p>
            <p>
                <label for="">First Name:</label>
                <input type="text" name="first_name" <?php echo 'value="' .$first_name.'"';?>>            
            </p>
            <p>
                <label for="">Last Name:</label>
                <input type="text" name="last_name" <?php echo 'value="' .$last_name.'"';?> >            
            </p>
            <p>
                <label for="">Email Address:</label>
                <input type="email" name="email" <?php echo 'value="' .$email.'"';?> >            
            </p>
            <p>
                <label for="">Password:</label>
                <span>*********</span> | <a href="/SamurdhiDivPHP/view/changePasswordView.php?user_id=<?php echo $_SESSION['user_id']; ?>">Change Password</a>
                        
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