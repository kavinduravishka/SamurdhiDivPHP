<script type="text/javascript">
function update()
{
  var form = document.forms[0];
  var sum = eval(form.interim_allo.value) + eval(form.language_allo.value);
  form.net_pay.value = isNaN(sum) ? "" : sum;
}
</script>

<form name="form1" onsubmit="false">
<!-- <fieldset>
<legend>Simple calculation</legend>
<label for="f1">X</label>
<input id="f1" name="x" type="number" onchange="update()">
<label for="f2">Y</label>
<input id="f2" name="y" type="number" onchange="update()">
<label for="f3">X + Y</label>
<input id="f3" name="sum" readonly="readonly">
</fieldset> -->

            <p>
                <label for=""id="sub_lbl">Interim Allowance:</label>
                <input type="int" name="interim_allo" id="nums" onchange="update()" >            
            </p>
            <p>
                <label for=""id="sub_lbl">Language Allownce:</label>
                <input type="int" name="language_allo" id="nums"  onchange="update()">            
            </p>
            <p>
                <label for="">Net Payment:</label>
                <input type="int" name="net_pay" id="nums"  readonly="readonly" >                
                <!-- <button type="submit" name="calculate" id="cal">Calculate</button>                  -->
            </p>
</form>