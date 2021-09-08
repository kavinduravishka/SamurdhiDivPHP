function validate(){
    var inputs = document.getElementsByClassName('forminput');

    return checkRequired(inputs);
}

function checkRequired(inputs){
    var input=null;
    var span=null;

    var passed=true;

    for(var i =0;i<inputs.length;i++){
        input=inputs[i];
        if(input.required==true){
            span = document.getElementById(input.getAttribute('spanid'));
            if(input.value==""){
                span.innerHTML="This field is required";
                passed=false;
            }
        }
    }
    return passed;
}

