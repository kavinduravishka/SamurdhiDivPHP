<form action="formView.php?formid=103" method="post">
<table class="formtable">


        <!-- $Date=''; -->
    <tr>
        <td class="fieldname">Date</td>

        <td><input type="date" required class="forminput" name="Date" max=<?php echo date('Y-m-d'); ?> value=""></td>
    </tr>
        
        <!-- $BeneficiaryNo=''; -->
    <tr>
        <td class="fieldname">Beneficiary No</td>

        <td><input type="texnumbert" required class="forminput" name="BeneficiaryNo" value="" maxlength="15"></td>
    </tr>
        
        <!-- $BenifName=''; -->
    <tr>
        <td class="fieldname">Beneficiary name</td>

        <td><input type="text" required class="forminput" name="BenifName" value="" maxlength="200"></td>
    </tr>
        
        <!-- $Amount=''; -->
    <tr>
        <td class="fieldname">Amount</td>

        <td><input type="number" step="0.01" required class="forminput" name="Amount" value=""></td>
    </tr>
        
        <!-- $NameAssured=''; -->
    <tr>
        <td class="fieldname">Assured By</td>

        <td><input type="text" required class="forminput" name="NameAssured" value="" maxlength="30"></td>
    </tr>
        
        <!-- $GNDiv=''; -->
    <tr>
        <td class="fieldname">gramaniladhari Division</td>

        <td><input type="text" required class="forminput" name="GNDiv" value="" maxlength="20"></td>
    </tr>
        
        <!-- $Reason=''; -->
    <tr>
        <td class="fieldname">Reason</td>

        <td><select type="text" required class="forminput" name="Reason" value="">
            <option value="Death">Death</option>
            <option value="Birth">Birth</option>
            <option value="Marrige">Marrige</option>
            <option value="Hospitalization">Hospitalization</option>
            <option value="Scholarship">Scholarship</option>
        </select></td>
    </tr>


</table>

<table class="tblsub">
    <tr>
        <td><input type="submit" value="submit" name="Submit"></td>
    </tr>
</table>

</form>
