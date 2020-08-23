function showCurrentTask(){
    document.getElementById("currenttask").style.visibility="visible";
}

function hideCurrentTask(){
    document.getElementById("currenttask").style.visibility="hidden";
}

function getCurrentPage() {
    const data = document.getElementsByName('pagedata')[0];
    if(data==null){
        return null;
    }
    var pagedata={};
    pagedata['tab'] = data.getAttribute('tab');
    pagedata['type'] = data.getAttribute('type');
    pagedata['title'] = data.getAttribute('title');

    return pagedata; 
}

function headeronload(){
    var page = getCurrentPage();

    if(page==null){
        return;
    }

    if(page.tab=="dash"){
        document.getElementById("dashboard").classList.add('active');
    }else if(page.tab=="form"){
        document.getElementById("form").classList.add('active');
    }else if(page.tab=="report"){
        document.getElementById("report").classList.add('active');
    }else if(page.tab=="task"){
        if(page.type=="form"){
            document.getElementById("currenttaskcatagory").innerHTML="Form";
        }else if(page.type=="report"){
            document.getElementById("currenttaskcatagory").innerHTML="Report";
        }

        document.getElementById("currenttasktask").innerHTML=page.title;

        showCurrentTask();
    }
}

headeronload();

function inputSize(x){
    var inputs= document.getElementsByClassName("forminput");
    for(var i=0;i<inputs.length;i++){
        //console.log(inputs[i].tagName);
        if(inputs[i].tagName=="INPUT"){
            inputs[i].setAttribute("size",x);
        }
        if(inputs[i].tagName=="TEXTAREA"){
            inputs[i].setAttribute("cols",x);
            inputs[i].setAttribute("rows",6);
            inputs[i].style.resize='none';
        }
        if(inputs[i].tagName=="SELECT"){
            inputs[i].style.width="150px";
        }
    }
}

inputSize(70);

//document.getElementById("MyElement").classList.add('MyClass');
//document.getElementById("MyElement").classList.remove('MyClass');