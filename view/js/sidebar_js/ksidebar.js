
let l1closed = 1;
let l2closed = 1;

var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "hidden";
	}

function openLayer1() {
  	document.getElementById("mySidebar").style.width = "250px";
  	//document.getElementById("maincontainer").style.marginLeft = "250px";
	document.getElementById("menubtn").innerHTML="&#10799";
	

  	var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "visible";;
	}

}

function openLayer2() {
    document.getElementById("mySidebar2layer").style.width = "250px";
	document.getElementById("mySidebar2layer").style.left = "250px";
	
	var ancs = document.getElementsByClassName("anc2");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "visible";;
	}

}

function closeLayer1() {
  	document.getElementById("mySidebar").style.width = "50px";
	document.getElementById("menubtn").innerHTML="☰";
  
  	var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "hidden";
        ancs.item(i).style.backgroundColor = "#111";
	}

}

function closeLayer2() {
  	document.getElementById("mySidebar2layer").style.width = "0px";
	document.getElementById("mySidebar2layer").style.left = "0px";
	
	var ancs = document.getElementsByClassName("anc2");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "hidden";
	}
}



function hb_state0(){
	document.getElementById("header-begin").style.width="100px";
}

function hb_state1(){
	document.getElementById("header-begin").style.width="300px";
}

function hb_state2(){
	document.getElementById("header-begin").style.width="550px";
}







function transLayer() {
	if (l1closed==1 && l2closed==1){
		openLayer1();
		hb_state1();

		l1closed=0;  
    }else if (l1closed==0 && l2closed==1){
		closeLayer1();
		hb_state0();
		
		l1closed=1;
    }else if (l1closed==0 && l2closed==0){
		closeLayer1();
		closeLayer2();
		hb_state0();

		l1closed=1;
		l2closed=1;
	}
	conslog();
}

function layer2only(open){
	if(open==1){
		openLayer2();
		hb_state2();

		l2closed=0;
	}else if(open==0){
		closeLayer2();
		hb_state1();

		l2closed=1;
	}
	conslog();
}



function selectback(idname) {
	var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
    	var elem = ancs.item(i);
    	if(elem.id==idname){
   			elem.style.backgroundColor = "#333";
        }else{
        	elem.style.backgroundColor = "#111";
        }
	}
}


function conslog(){
	console.log("l1closed: "+l1closed + " | l2closed: "+l2closed);
}
