<?php session_start(); ?>
<?php //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php"); 

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\staff-member.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\staff-member-in.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\Project\classes\staff-member-out.class.php");

?>
<?php 

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }
    
    //$errors=array();
    $member_id='';
    $nic_number='';
    $name='';
    $designation='';
    $service='';
    $date_appointed='';
    $date_of_birth='';
    $date_of_pension='';
    $w_op_number='';
    $member_type='';


    if(isset($_GET['member_id'])){

        $member_id=$_GET['member_id'];
        
        $req_member=StaffMember::getMember($member_id);

        extract($req_member); 
           


        // $member_id=mysqli_real_escape_string($connection,$_GET['member_id']);
        // $query="SELECT * FROM personalfile WHERE member_id={$member_id} LIMIT 1";
        // $result_set=mysqli_query($connection,$query);

        // if($result_set){
        //     if(mysqli_num_rows($result_set)==1){
        //         $result =mysqli_fetch_assoc($result_set);

        //         $nic_number=$result['nic_number'];
        //         $name=$result['name'];
        //         $designation=$result['designation'];
        //         $service=$result['service'];
        //         $date_appointed=$result['date_appointed'];
        //         $date_of_birth=$result['date_of_birth'];
        //         $date_of_pension=$result['date_of_pension'];
        //         $w_op_number=$result['w_op_number'];
        //     }
        //     else{
        //         header('Location: personal-files.php?err=member_not_found');
        //     }
        
        // }else{
        //     header('Location: personal-files.php?err=query_failed');
        // }

    }

    if(isset($_POST['submit'])){
        $member_id=$_POST['member_id'];
        $nic_number=$_POST['nic_number'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $service=$_POST['service'];
        $date_appointed=$_POST['date_appointed'];
        $date_of_birth=$_POST['date_of_birth'];
        $date_of_pension=$_POST['date_of_pension'];
        $w_op_number=$_POST['w_op_number'];
        $member_type=$_POST['member_type'];
        

        switch ($member_type) {
            case 'in':
                $sMemberIn=new StaffMemberIn($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number);
                $sMemberIn->updateMember($member_id);
                header ('Location: personal-files.index.php?member_modified=true');
                break;
            case 'out':
                $sMemberOut=new StaffMemberOut($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number);
                $sMemberOut->updateMember($member_id);
                header ('Location: personal-files.index.php?member_modified=true');
                break;
            
            default:
                echo "Error!";
                break;
        }
        

        // $req_fields=array('nic_number','name','designation','service','date_appointed','date_of_birth','date_of_pension','w_op_number');

        // foreach ($req_fields as $field){
        //     if(empty(trim($_POST[$field]))){
        //         $errors[]=$field .' is required';
        //     }
        // }

        // $max_len_fields=array('nic_number'=>12,'name'=>100,'designation'=>100,'service'=>50,'w_op_number'=>7);

        // foreach ($max_len_fields as $field=>$max_len){
        //     if(strlen(trim($_POST[$field]))>$max_len){
        //         $errors[]=$field .' must be less than ' .$max_len .'characters';
        //     }
        // }


         

        // if(empty($errors)){
        //     $member_id=mysqli_real_escape_string($connection,$_POST['member_id']);
        //     $nic_number=mysqli_real_escape_string($connection,$_POST['nic_number']);
        //     $name=mysqli_real_escape_string($connection,$_POST['name']);
        //     $designation=mysqli_real_escape_string($connection,$_POST['designation']);
        //     $service=mysqli_real_escape_string($connection,$_POST['service']);
        //     $date_appointed=mysqli_real_escape_string($connection,$_POST['date_appointed']);
        //     $date_of_birth=mysqli_real_escape_string($connection,$_POST['date_of_birth']);
        //     $date_of_pension=mysqli_real_escape_string($connection,$_POST['date_of_pension']);
        //     $w_op_number=mysqli_real_escape_string($connection,$_POST['w_op_number']);
            
        //     echo "id is {$member_id}";

        //     $query="UPDATE personalfile SET nic_number='{$nic_number}',name='{$name}',designation='{$designation}',service='{$service}',date_appointed='{$date_appointed}',";
        //     $query.="date_of_birth='{$date_of_birth}',date_of_pension='{$date_of_pension}',w_op_number={$w_op_number} WHERE member_id={$member_id} ";

           
                        
        //     $result=mysqli_query($connection,$query);
        //     if ($result){
        //         header ('Location: personal-files.php?member_modified=true');
        //     }
        //     else{
        //         echo("Error description: " . mysqli_error($connection));
        //         $errors[]='Failed to modify the entry.';
        //         //die(mysql_error());
        //     }
            
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify Personal-file</title>
    
    
</head>
<body>
    <header>
        <div class="appname">Samurdhi Division</div>
        <div class="loggedin">Welcome <?php echo $_SESSION['user_name']; ?>! <a href="logout.php">Log Out</a></div>

        <link rel="stylesheet" href="\myphp\Project\css\main.css">

    </header>


    <main>
        <h1>View / Modify Personal-file<span><a href="personal-files.index.php"> Back to Personal-file List</a></span></h1>
        
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

        <form action="modify-member.index.php" method="post" class="memberform" >
            
            <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
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
                <label for="">Type of the member:</label>
                <input type="text" name="member_type" <?php echo 'value="' .$member_type.'"';?> > 
                
            </p>
            
            
            
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>

            
        </form>


    </main>
</body>
</html>