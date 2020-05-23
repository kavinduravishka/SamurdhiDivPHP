
let closed = 1;

var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "hidden";
	}

function openNav() {
  	document.getElementById("mySidebar").style.width = "250px";
  	document.getElementById("main").style.marginLeft = "250px";
    
  	var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "visible";;
	}
}

function closeNav() {
  	document.getElementById("mySidebar").style.width = "50px";
  	document.getElementById("main").style.marginLeft= "50px";
  
  	var ancs = document.getElementsByClassName("anc");
	for (var i = 0; i < ancs.length; i++) {
   		ancs.item(i).style.visibility = "hidden";
        ancs.item(i).style.backgroundColor = "#111";
	}
}

function closeNav2() {
  	document.getElementById("mySidebar2layer").style.width = "0px";
    document.getElementById("mySidebar2layer").style.left = "0px";
    document.getElementById("main").style.marginLeft= "250px";
  
}

function transNav() {
	if (closed==1){
    	  openNav();
        closed=0;
    }else if (closed==0){
    	  closeNav();
        closeNav2();
        document.getElementById("main").style.marginLeft= "50px";
        closed=1;
    }
}

function openNav2() {
  	document.getElementById("mySidebar2layer").style.width = "250px";
    document.getElementById("mySidebar2layer").style.left = "250px";
  	document.getElementById("main").style.marginLeft = "500px";
    	
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


    
