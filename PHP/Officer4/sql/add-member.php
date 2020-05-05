<?php session_start(); ?>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php"); ?>
<?php 

    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
    }
    
    $errors=array();

    $nic_number='';
    $name='';
    $designation='';
    $service='';
    $date_appointed='';
    $date_of_birth='';
    $date_of_pension='';
    $w_op_number='';


    if(isset($_POST['submit'])){

        $nic_number=$_POST['nic_number'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $service=$_POST['service'];
        $date_appointed=$_POST['date_appointed'];
        $date_of_birth=$_POST['date_of_birth'];
        $date_of_pension=$_POST['date_of_pension'];
        $w_op_number=$_POST['w_op_number'];


        $req_fields=array('nic_number','name','designation','service','date_appointed','date_of_birth','date_of_pension','w_op_number');

        foreach ($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field .' is required';
            }
        }

        $max_len_fields=array('name'=>100,'designation'=>100,'service'=>50,'w_op_number'=>7);

        foreach ($max_len_fields as $field=>$max_len){
            if(strlen(trim($_POST[$field]))>$max_len){
                $errors[]=$field .' must be less than ' .$max_len .'characters';
            }
        }


        $nic_number=mysqli_real_escape_string($connection,$_POST['nic_number']);
        $query="SELECT * FROM personalfile WHERE nic_number='{$nic_number}' LIMIT 1";
        $result_set=mysqli_query($connection,$query);
        if($result_set){
            if(mysqli_num_rows($result_set)==1){
                $errors[]='This personal-file entry is already exist .';
            }
        }

        if(empty($errors)){
            $nic_number=mysqli_real_escape_string($connection,$_POST['nic_number']);
            $name=mysqli_real_escape_string($connection,$_POST['name']);
            $designation=mysqli_real_escape_string($connection,$_POST['designation']);
            $service=mysqli_real_escape_string($connection,$_POST['service']);
            $date_appointed=mysqli_real_escape_string($connection,$_POST['date_appointed']);
            $date_of_birth=mysqli_real_escape_string($connection,$_POST['date_of_birth']);
            $date_of_pension=mysqli_real_escape_string($connection,$_POST['date_of_pension']);
            $w_op_number=mysqli_real_escape_string($connection,$_POST['w_op_number']);
            
           

            $query="INSERT INTO personalfile(nic_number, name , designation , service ,date_appointed ,date_of_birth ,date_of_pension ,w_op_number, is_deleted ) ";
            $query .="VALUES ('{$nic_number}','{$name}','{$designation}','{$service}','{$date_appointed}','{$date_of_birth}','{$date_of_pension}','{$w_op_number}',0 )";

            $result=mysqli_query($connection,$query);
            if ($result){
                header ('Location: personal-files.php?member_added=true');
            }
            else{
                $errors[]='Failed to add the new entry.';
            }
            
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Personal-file</title>
    
    
</head>
<body>
    <header>
        <div class="appname">User Management System</div>
        <div class="loggedin">Welcome <?php echo $_SESSION['user_name']; ?>!<a href="logout.php">Log Out</a></div>
    </header>

    <main>
        <h1>Add New Personal-File<span><a href="personal-files.php">Back to Personal-file List</a></span></h1>
        
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

        <form action="add-member.php" method="post" class="addmemberform" >
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
                <label for="">No. of W & OP:</label>
                <input type="text" name="w_op_number" <?php echo 'value="' .$w_op_number.'"';?> >            
            </p>
            
            
            
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
</body>
</html>