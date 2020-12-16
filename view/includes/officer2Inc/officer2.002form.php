<?php


?>

<form action="formView.php?formid=002" method="post">
<table class="formtable">

        <!-- 'CBORegNo'=>$CBORegNo, -->
    <tr>
        <td class="fieldname">CBO Registor number</td>

        <td><input type="text" required class="forminput" name="CBORegNo" value="<?php echo $_SESSION['RegNo']; ?>"></td>
    </tr>

        <!-- 'Post'=>$Post, -->
    <tr>
        <td class="fieldname">Post</td>

        <td><select required class="forminput" name="Post" >
            <option value="President">President</option>
            <option value="Vice president">Vice president</option>
            <option value="Secratary">Secratary</option>
            <option value="Vice secratary">Vice secratary</option>
            <option value="Treasurer">Treasurer</option>
            <option value="Internal auditor">Internal auditor</option>
            <option value="Member">Member</option>
        </select></td>
    </tr>

        <!-- 'Name'=>$Name, -->
    <tr>
        <td class="fieldname">Name</td>

        <td><input type="text" required class="forminput" name="Name" value=""></td>
    </tr>

        <!-- 'Address'=>$Address, -->
    <tr>
        <td class="fieldname">Address</td>

        <td><textarea type="text" required class="forminput" name="Address" value=""></textarea></td>
    </tr>

        <!-- 'Telephone'=>$Telephone, -->
    <tr>
        <td class="fieldname">Telephone</td>

        <td><input type="telephone" required class="forminput" name="Telephone" minlength="10" maxlength="10" value=""></td>
    </tr>

        <!-- 'NIC'=>$NIC -->
    <tr>
        <td class="fieldname">NIC number</td>

        <td><input type="text" required class="forminput" name="NIC" minlength="10" maxlength="12"value=""></td>
    </tr>

</table>

<table class="tblsub">
    <tr>
        <td><input type="submit" value="Next" name="SubmitNext"></td>
        <td><input type="submit" value="Finish" name="SubmitFinish"></td>
    </tr>
</table>

</form>