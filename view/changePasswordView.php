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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    
</head>
<body>
    
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/kheader.js"></script>
    

    <?php 
    
    //include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
    include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/dheader.inc.php");
    ?> 

    <main>
        <h1 style="margin-left: -200px;">User Profile</h1>
        
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
                <input type='password' name="old_password" id='password1'  >&nbsp;
                <i style="cursor: pointer" class="far fa-eye" id="togglePassword1" onclick="ToggleFunc('togglePassword1','password1')"></i>
                        
            </p>
            <p>
                <label for="">New Password:</label>
                <input type='password' name="new_password" id='password2'  >&nbsp;
                <i style="cursor: pointer" class="far fa-eye" id="togglePassword2" onclick="ToggleFunc('togglePassword2','password2')"></i>
                        
            </p>
            <p>
                <label for="">Retype New Password:</label>
                <input type='password' name="re_new_password" id='password3'  >&nbsp;
                <i style="cursor: pointer" class="far fa-eye" id="togglePassword3" onclick="ToggleFunc('togglePassword3','password3')"></i>
                        
            </p>
            
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>

            
        </form>


    </main>
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/konload.js"></script>
    <script>

    function ToggleFunc(tp,p){
        const togglePassword = document.getElementById(tp);
        const password = document.getElementById(p);
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    }
        
    </script>
</body>
</html>