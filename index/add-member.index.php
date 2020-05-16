<?php session_start(); ?>
<?php 
    require_once("../classes/dbh.class.php");
    require_once("../classes/staff-member.class.php");
    require_once("../classes/staff-member-in.class.php");
    require_once("../classes/staff-member-out.class.php");
?>
<?php 

    // if(!isset($_SESSION['user_id'])){
    //     header('Location: login.php');
    // }

    
    
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
        $member_type=$_POST['member_type'];

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

        if(empty($errors)){
            switch ($member_type) {
                case 'in':
                    $sMemberIn=new StaffMemberIn($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number);
                    $sMemberIn->addMember();
                    
                    break;
                case 'out':
                    $sMemberOut=new StaffMemberOut($nic_number,$name,$designation,$service,$date_appointed,$date_of_birth,$date_of_pension,$w_op_number);
                    $sMemberOut->addMember();
                    
                    break;
                
                default:
                     $errors[]='Failed to add the new entry.';
                    break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Personal-file</title>
    
    <link rel="stylesheet" href="../css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="../css/styles/navbar.css" >
    
    
</head>
<body>
    <?php require_once("../include/header.inc.php"); ?>
    <?php 
    	$navpaths=array("Dashboard"=>"officer4-dashboard.index.php");
		require_once("../include/navbar.inc.php");
	?>
	

    <main>
        <h1>Add New Personal-File</h1>
        
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

        <form action="add-member.index.php" method="post" class="memberform" >
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
                <select name=member_type>
                    <option value="in">Inside Officer</option>
                    <option value="out">Field Officer</option>
                </select>
            </p>           
            
            
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
</body>
</html>