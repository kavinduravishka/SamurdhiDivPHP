<form action="formView.php?formid=101" method="post">
    <table class="formtable">

        <!-- $NIC=''; -->
        <tr>
            <td class="fieldname">NIC number</td>

            <td><input type="text" required class="forminput" name="NIC" value=""></td>
        </tr>
            <!-- $Name=''; -->
        <tr>
            <td class="fieldname">Name</td>

            <td><input type="text" required class="forminput" name="Name" value=""></td>
        </tr>
            <!-- $Address=''; -->
        <tr>
            <td class="fieldname">Address</td>

            <td><textarea type="text" required class="forminput" name="Address" value=""></textarea></td>
        </tr>
            <!-- $Date=''; -->

        <tr>
            <td class="fieldname">Date</td>

            <td><input type="date" required class="forminput" name="Date" value=""></td>
        </tr>
    </table>

    <table>
    <tr>
        <td><input type="submit" value="Submit" name="Submit"></td>
    </tr>
</table>

</form>