let optmenuclosed=1;

function dropmenushow(){
    if(optmenuclosed==1){
        document.getElementById("dropmenu").style.visibility="visible";
        document.getElementById("dropmenu").style.transform="scale(1)";
        document.getElementById("dropmenu").style.msTransform="scale(1)";
        document.getElementById("div_useroptbtn").innerHTML="&#9650";
        optmenuclosed=0;
    }else if(optmenuclosed==0){
        document.getElementById("dropmenu").style.visibility="hidden";
        document.getElementById("dropmenu").style.transform="scale(0)";
        document.getElementById("dropmenu").style.msTransform="scale(1)";
        document.getElementById("div_useroptbtn").innerHTML="&#9660";
        optmenuclosed=1;
    }
}

