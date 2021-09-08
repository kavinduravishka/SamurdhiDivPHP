<form action="formView.php?formid=101" method="post">
<table class="formtable">
    
    <!-- $Zone=''; -->
    <tr>
        <td class="fieldname">Zone</td>

        <td><input type="text" required class="forminput" name="Zone" value="" maxlength="15"></td>
    </tr>

    <!-- $ForceNo=''; -->
    <tr>
        <td class="fieldname">Samrudhdhi Force No</td>

        <td><input type="number" required class="forminput" name="ForceNo" value="" maxlength="15"></td>
    </tr>

    <!-- $Village=''; -->
    <tr>
        <td class="fieldname">Village</td>

        <td><input type="text" required class="forminput" name="Village" value="" maxlength="15"></td>
    </tr>

    <!-- $GNDomain=''; -->
    <tr>
        <td class="fieldname">Gramaniladhari Domain</td>

        <td><input type="text" required class="forminput" name="GNDomain" value="" maxlength="15"></td>
    </tr>

    <!-- $SSOwnershipNo=''; -->
    <tr>
        <td class="fieldname">SSF Ownership No</td>

        <td><input type="text" required class="forminput" name="SSOwnershipNo" value="" maxlength="15"></td>
    </tr>

    <!-- $Name=''; -->
    <tr>
        <td class="fieldname">Name</td>

        <td><input type="text" required class="forminput" name="Name" value="" maxlength="200"></td>
    </tr>

    <!-- $Address=''; -->
    <tr>
        <td class="fieldname">Address</td>

        <td><textarea type="text" required class="forminput" name="Address" value=""></textarea></td>
    </tr>

    <!-- $Successer=''; -->
    <tr>
        <td class="fieldname">Successer</td>

        <td><input type="text" required class="forminput" name="Successer" value="" maxlength="200"></td>
    </tr>

    <!-- $HomeNo=''; -->
    <tr>
        <td class="fieldname">Home No</td>

        <td><input type="text" required class="forminput" name="HomeNo" value="" maxlength="15"></td>
    </tr>


</table>

<table class="tblsub">
    <tr>
        <td><input type="submit" value="Submit and finish" name="SubmitFinish"></td>
        <td><input type="submit" value="Submit and add family members" name="SubmitNext"></td>
    </tr>
</table>

</form>

