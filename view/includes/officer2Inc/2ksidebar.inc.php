

<div id="mySidebar" class="sidebar">
    <a id="menubtn" href="javascript:void(0)" class="closebtn" onclick="transLayer()" id="navclosebtn">☰</a>
    

    <!-- <a class="anc" href="dashboardView.php" onclick="layer2only(0); selectback('todash');" id="todash">DashBoard</a> 
    <a class="anc" href="selectFormView.php" onclick="layer2only(0); selectback('toforms');" id="toforms">Forms</a>
    <a class="anc" href="selectReportView.php" onclick="layer2only(0); selectback('toreports');" id="toreports">Reports</a> -->

    <a class="anc" href="javascript:void(0)" onclick="layer2only(1); selectback('toCBO'); selectCBO();" id="toCBO">Community based organizations</a>
    <a class="anc" href="javascript:void(0)" onclick="layer2only(1); selectback('toLot'); selectLottary();" id="toLot">Lottary fund</a>
    <a class="anc" href="javascript:void(0)" onclick="layer2only(1); selectback('toMF'); selectMF();" id="toMF">Mandatory Funds</a>
    
    
  
</div>

<div class="sidebar2layer" id="mySidebar2layer">
</div>


<script>

 let innerCBO ='<a class="anc2" href="dashboardView.php?q=cbo">View</a>\
<a class="anc2" href="formView.php?formid=001">Add new record</a>';

 let innerLottary ='<a class="anc2" href="dashboardView.php?q=lott">View</a>\
<a class="anc2" href="formView.php?formid=101">Add new record</a>';

 let innerMF ='<a class="anc2" href="dashboardView.php?q=mandf">View</a>\
<a class="anc2" href="formView.php?formid=201">New fund request</a>\
<a class="anc2" href="reportView.php">Get monthly report</a>';

 function selectCBO(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerCBO;
 }

 function selectLottary(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerLottary;
 }

 function selectMF(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerMF;
 }

</script>