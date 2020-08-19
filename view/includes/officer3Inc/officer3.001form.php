<form action="formView.php?formid=001" method="post">
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

    <!-- $Gender=''; -->
    <tr>
        <td class="fieldname">Gender</td>

        <td><select type="text" required class="forminput" name="Gender" value="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select></td>
    </tr>

    <!-- $Ethnicity=''; -->
    <tr>
        <td class="fieldname">Ethnicity</td>

        <td><select type="text" required class="forminput" name="Ethnicity" value="">
            <option value="Sinhala">Sinhala</option>
            <option value="Tamil">Tamil</option>
            <option value="Muslim">Muslim</option>
            <option value="Burger">Burger</option>
        </select></td>
    </tr>

    <!-- $Guardian=''; -->
    <tr>
        <td class="fieldname">Guardian</td>

        <td><input type="text" required class="forminput" name="Guardian" value=""></td>
    </tr>

    <!-- $SpeciallyAbled=''; -->
    <tr>
        <td class="fieldname">Is the studant specially Abled</td>

        <td><select type="text" required class="forminput" name="SpeciallyAbled" value="">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select></td>
    </tr>

    <!-- $Stream=''; -->
    <tr>
        <td class="fieldname">Gender</td>

        <td><select type="text" required class="forminput" name="Stream" value="">
            <option value="Biology">Biology</option>
            <option value="Maths">Maths</option>
            <option value="ICT">ICT</option>
            <option value="Commerce">Commerce</option>
            <option value="Art">Art</option>
            <option value="Technology">Technology</option>
            <option value="Agri">Agri</option>
        </select></td>
    </tr>

    <!-- $School=''; -->
    <tr>
        <td class="fieldname">School</td>

        <td><input type="text" required class="forminput" name="School" value=""></td>
    </tr>

    <!-- $Address=''; -->
    <tr>
        <td class="fieldname">Address</td>

        <td><input type="text" required class="forminput" name="Address" value=""></td>
    </tr>

    <!-- $Bank=''; -->
    <tr>
        <td class="fieldname">Bank</td>

        <td><input type="text" required class="forminput" name="Bank" value=""></td>
    </tr>

    <!-- $SisurakaAcNo=''; -->
    <tr>
        <td class="fieldname">Sisuraka account number</td>

        <td><input type="text" required class="forminput" name="SisurakaAcNo" value=""></td>
    </tr>

    <!-- $PeriodID=''; -->
    <tr>
        <td class="fieldname">Period</td>

    <td><select type="text" required class="forminput" name="PeriodID" value="">
            <option value="1">2018-2020</option>
            <option value="2">2019-2021</option>
            <option value="3">2020-2022</option>
            <option value="4">2021-2023</option>
            <option value="5">2022-2024</option>
            <option value="6">2023-2025</option>
            <option value="7">2024-2026</option>
            <option value="8">2025-2027</option>
            <option value="9">2026-2028</option>
    </select></td>

</table>

<table>
    <tr>
        <td><input type="submit" value="submit" name="Submit"></td>
    </tr>
</table>

</form>

