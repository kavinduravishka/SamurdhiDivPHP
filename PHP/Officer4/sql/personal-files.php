<?php session_start(); ?>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\myphp\OOSDProject\inc\connection.php"); ?>

<?php 
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
    }

    $personalfile_list='';
    $query="SELECT * FROM personalfile WHERE is_deleted=0 ORDER BY date_appointed";
    $members=mysqli_query($connection, $query);

    if($members){
        while($member=mysqli_fetch_assoc($members)){
            $personalfile_list.="<tr>";
            $personalfile_list.="<td>{$member['nic_number']}</td>";
            $personalfile_list.="<td>{$member['name']}</td>";
            $personalfile_list.="<td>{$member['designation']}</td>";
            $personalfile_list.="<td>{$member['service']}</td>";
            $personalfile_list.="<td>{$member['date_appointed']}</td>";
            $personalfile_list.="<td>{$member['date_of_birth']}</td>";
            $personalfile_list.="<td>{$member['date_of_pension']}</td>";
            $personalfile_list.="<td>{$member['w_op_number']}</td>";
            $personalfile_list.="<td><a href=\"modify-member.php?member_id={$member['member_id']}\">Edit</a></td>";
            $personalfile_list.="<td><a href=\"delete-member.php?member_id={$member['member_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $personalfile_list.="</tr>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal File Modifications</title>
    
    
</head>
<body>
    <header>
        <div class="appname">Samurdhi Division</div>
        <div class="loggedin">Welcome <?php echo $_SESSION['user_name']; ?>!<a href="logout.php">Log Out</a></div>
    </header>


    <main>
        <h1>Personal File Details<span><a href="add-member.php">+ Add New</a></span></h1>
        <table class="personalfile_list">

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
        
        </table>
    </main>
</body>
</html>