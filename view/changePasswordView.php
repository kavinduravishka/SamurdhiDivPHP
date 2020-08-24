<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/changePasswordInc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagedata" tab="dash">
    <title>Modify Personal-file</title>
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
    
    //include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/dheader.inc.php");
    ?> 

    <main>
        <h1 style="margin-left: -200px;";>User Profile</h1>
        
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

        <form action="changePasswordView.php" method="post" class="memberform" >
            <p>
                <label for="">First Name:</label>
                <input type="text" name="first_name" <?php echo 'value="' .$first_name.'"';?> disabled>            
            </p>
            <p>
                <label for="">Last Name:</label>
                <input type="text" name="last_name" <?php echo 'value="' .$last_name.'"';?> disabled>            
            </p>
            <p>
                <label for="">Email Address:</label>
                <input type="email" name="email" <?php echo 'value="' .$email.'"';?> disabled>            
            </p>
            <p>
                <label for="">Old Password:</label>
                <input type='password' name="old_password" id='password'  >&nbsp;<br>
                <!-- <input style="margin-left: 250px;width:20px;height:20px"; type='checkbox' id='toggle' value='0' onchange='togglePassword(this);'>&nbsp; <span id='toggleText'>Show</span>
                         -->
            </p>
            <p>
                <label for="">New Password:</label>
                <input type='password' name="new_password" id='password'  >&nbsp;<br>
                <!-- <input style="margin-left: 250px;width:20px;height:20px"; type='checkbox' id='toggle' value='0' onchange='togglePassword(this);'>&nbsp; <span id='toggleText'>Show</span>
                         -->
            </p>
            <p>
                <label for="">Retype New Password:</label>
                <input type='password' name="re_new_password" id='password'  >&nbsp;<br>
                <!-- <input style="margin-left: 250px;width:20px;height:20px"; type='checkbox' id='toggle' value='0' onchange='togglePassword(this);'>&nbsp; <span id='toggleText'>Show</span>
                         -->
            </p>
            
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>

            
        </form>


    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
    
    <script type="text/javascript"> 
        function togglePassword(el){
            var checked = el.checked;
            if(checked){
                document.getElementById("password").type = 'text';
                document.getElementById("toggleText").textContent= "Hide";
            }else{
                document.getElementById("password").type = 'password';
                document.getElementById("toggleText").textContent= "Show";
            }
        }    
    </script>
</body>
</html>