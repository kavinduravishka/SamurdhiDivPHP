<form action="formView.php?formid=201" method="post">
    <table class="formtable">

        <tr>
            <td class="fieldname">Serial No</td>

            <td><input type="number" required class="forminput" name="SerialNo" value=""></td>
        </tr>

        <!-- $Date =''; -->
        <tr>
            <td class="fieldname">Date</td>

            <td><input type="date" required class="forminput" name="Date" value=""></td>
        </tr>
     
        <!-- $GNDomain=''; -->
        <tr>
            <td class="fieldname">Grama Niladhari domain</td>

            <td><input type="text" required class="forminput" name="GNDomain" value=""></td>
        </tr>
     
        <!-- $BenefName=''; -->
        <tr>
            <td class="fieldname">Name of the beneficiarie</td>

            <td><input type="text" required class="forminput" name="BenefName" value=""></td>
        </tr>
      
        <!-- $AcceptedBy=''; -->
        <tr>
            <td class="fieldname">Accepted by</td>

            <td><input type="text" required class="forminput" name="AcceptedBy" value=""></td>
        </tr>
      
        <!-- $AppDate=''; -->
        <tr>
            <td class="fieldname">Accepted data</td>

            <td><input type="date" required class="forminput" name="AppDate" value=""></td>
        </tr>
      
        <!-- $AppBank=''; -->
        <tr>
            <td class="fieldname">Accepted bank</td>

            <td><input type="text" required class="forminput" name="AppBank" value=""></td>
        </tr>


    </table>

<table class="tblsub">
    <tr>
        <td><input type="submit" value="Submit" name="Submit"></td>
    </tr>
</table>

</form>