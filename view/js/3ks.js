let innerSSF = '<a class="anc2" href="">View</a>\
<a class="anc2" href="">Register</a>\
<a class="anc2" href="">Get report</a>';


let innerLottary = '<a class="anc2" href="">View</a>\
<a class="anc2" href="">Add new record</a>';

function selectSSF(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerSSF;
}

function selectLottary(){
    var sbl2 = document.getElementById("mySidebar2layer");
    sbl2.innerHTML=innerLottary;
}