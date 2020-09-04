

<div id="mySidebar" class="sidebar">
    <a id="menubtn" href="javascript:void(0)" class="closebtn" onclick="transLayer()" id="navclosebtn">☰</a>
   
    <!-- <a class="anc" href="dashboardView.php" onclick="layer2only(0); selectback('todash');" id="todash">DashBoard</a> 
    <a class="anc" href="selectFormView.php" onclick="layer2only(0); selectback('toforms');" id="toforms">Forms</a>
    <a class="anc" href="selectReportView.php" onclick="layer2only(0); selectback('toreports');" id="toreports">Reports</a>
     -->
    
    <a class="anc" href="javascript:void(0)" onclick="layer2only(1); selectback('toSSF'); selectSSF();" id="toSSF">Social security fund</a>
    <a class="anc" href="javascript:void(0)" onclick="layer2only(1); selectback('toLot'); selectSchol();" id="toSco">Sipdora scholarship</a>
    
  
</div>

<div class="sidebar2layer" id="mySidebar2layer">
    <!-- <a class="anc2" href="">any Option</a> 
    <a class="anc2" href="">any Option</a>
    <a class="anc2" href="">any Option</a>
    <a class="anc2" href="">any Option</a> -->
</div>


<script>

let innerSSF = '<a class="anc2" href="">View</a>\
<a class="anc2" href="formView.php?formid=101">Register new applicant</a>\
<a class="anc2" href="formView.php?formid=102">Add new family member</a>\
<a class="anc2" href="formView.php?formid=103">Add new payment</a>\
<a class="anc2" href="reportView.php">Get monthly report</a>';


let innerSchol = '<a class="anc2" href="">View</a>\
<a class="anc2" href="formView.php?formid=001">Add new record</a>';

function selectSSF(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerSSF;
}

function selectSchol(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerSchol;
}

</script>