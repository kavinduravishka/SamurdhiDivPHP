<?php

// $RegNo=$_POST['RegNo'];
// $Name=$_POST['Name'];
// $Address=$_POST['Address'];
// $Telephone=$_POST['Telephone'];
// $EMail=$_POST['EMail'];
// $Village=$_POST['Village'];
// $GNDomain=$_POST['GNDomain'];
// $Zone=$_POST['Zone'];
// $NoOfMemPrev=$_POST['NoOfMemPrev'];
// $NoOfMemNew=$_POST['NoOfMemNew'];
// $AnnualMeetingDate=yfa($_POST['AnnualMeetingDate']);
// $BankName=$_POST['BankName'];
// $AccountNo=$_POST['AccountNo'];
// $AccountOpenDate=yfa($_POST['AccountOpenDate']);
// $Balance=$_POST['Balance'];

?>


<form action="formView.php?formid=001" method="post">
<table class="formtable">
    <tr>
        <td class="fieldname">Registor number</td>

        <td><input type="text" required class="forminput" name="RegNo" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Name</td>

        <td><input type="text" required class="forminput" name="Name" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Address</td>

        <td><textarea type="text" required class="forminput" name="Address" value=""></textarea></td>
    </tr>

    <tr>
        <td class="fieldname">Telephone</td>

        <td><input type="telephone" required class="forminput" name="Telephone" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Email</td>

        <td><input type="email" required class="forminput" name="EMail" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Village</td>

        <td><input type="text" required class="forminput" name="Village" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Grama Niladhari domain</td>

        <td><input type="text" required class="forminput" name="GNDomain" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Zone</td>

        <td><input type="text" required class="forminput" name="Zone" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Number of previous members</td>

        <td><input type="number" required class="forminput" name="NoOfMemPrev" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Number of new members</td>

        <td><input type="number" required class="forminput" name="NoOfMemNew" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Annual meeting Date</td>

        <td><input type="date" required class="forminput" name="AnnualMeetingDate" max=<?php echo date('Y-m-d'); ?> value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Bank NAme</td>

        <td><input type="text" required class="forminput" name="BankName" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Account Number</td>

        <td><input type="text" required class="forminput" name="AccountNo" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Account open date</td>

        <td><input type="date" required class="forminput" name="AccountOpenDate" max=<?php echo date('Y-m-d'); ?> value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Balance</td>

        <td><input type="number" step="0.01" required class="forminput" name="Balance" value=""></td>
    </tr>

    <tr>
        <td class="fieldname">Renewed date</td>

        <td><input type="date" required class="forminput" name="RenewedDate" max=<?php echo date('Y-m-d'); ?> value="<?php echo date("Y-m-d"); ?>"></td>
    </tr>

</table>

<table class="tblsub">
    <tr>
        <td><input type="submit" value="submit" name="Submit"></td>
    </tr>
</table>

</form>

