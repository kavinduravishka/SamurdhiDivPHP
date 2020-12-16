<form action="formView.php?formid=102" method="post">
<table class="formtable">
    
<?php
if(isset($_SESSION['OwnershipNo'])){
    $owno=$_SESSION['OwnershipNo'];
}else{
    $owno='';
}

?>
 
<!-- $OwnershipNo=''; -->
    <tr>
        <td class="fieldname">SSF Ownership No</td>

        <td><input type="text" required class="forminput" name="OwnershipNo" value="<?php echo $owno; ?>"></td>
    </tr>

<!-- $Name=''; -->
    <tr>
        <td class="fieldname">Name</td>

        <td><input type="text" required class="forminput" name="Name" value=""></td>
    </tr>

<!-- $Gender=''; -->
    <tr>
        <td class="fieldname">Gender</td>

        <td><select type="text" required class="forminput" name="Gender" value="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select></td>
    </tr>

<!-- $MaritialState=''; -->
    <tr>
        <td class="fieldname">Maritial State</td>

        <td><select type="text" required class="forminput" name="MaritialState" value="">
            <option value="1">YES</option>
            <option value="0">NO</option>
        </select></td>
    </tr>

<!-- $BDay=''; -->
    <tr>
        <td class="fieldname">Birth day</td>

        <td><input type="date" required class="forminput" name="BDay" max=<?php echo date('Y-m-d'); ?> value=""></td>
    </tr>

<!-- $Age=''; -->
    <tr>
        <td class="fieldname">Age</td>

        <td><input type="number" required class="forminput" name="Age" value=""></td>
    </tr>

<!-- $RelToBenif=''; -->
    <tr>
        <td class="fieldname">Relationship to the beneficiarie</td>

        <td><input type="text" required class="forminput" name="RelToBenif" value=""></td>
    </tr>

<!-- $Profession=''; -->
    <tr>   
        <td class="fieldname">Profession</td>

        <td><input type="text" required class="forminput" name="Profession" value=""></td>
    </tr>

<!-- $NIC=''; -->
    <tr>
        <td class="fieldname">NIC</td>

        <td><input type="text" class="forminput" name="NIC" value=""></td>
    </tr>

<!-- $Dead=''; -->
    <tr>
        <td class="fieldname">Is the benificiary dead</td>

        <td><select type="text" required class="forminput" name="Dead" value="">
            <option value="0">NO</option>
            <option value="1">YES</option>
        </select></td>
    </tr>
   

</table>

<table class="tblsub">
    <tr>
        <td><input type="submit" value="Submit and finish" name="SubmitFinish"></td>
        <td><input type="submit" value="Submit and add new family member" name="SubmitNext"></td>
    </tr>
</table>

</form>

