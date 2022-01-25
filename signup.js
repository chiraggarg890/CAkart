function validate() {  
    var fname = document.signup.username;  
    var paaas = document.signup.pass;  
    var emal = document.signup.email;  
    if (fname.value.length <= 0) {  
        alert("Name is required");  
        fname.focus();  
        return false;  
    }  
    if (paaas.value.length <= 0) {  
        alert("Password is required");  
        paaas.focus();  
        return false;  
    }  
    
     }
     function emailValidator(elem, helperMsg){
        
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if(elem.value.match(emailExp)){
            return true;
        }else{
            alert(helperMsg);
            elem.focus();
            return false;
        }
    } 

    function passcheck(){
        var fname = document.signup.cpass;  
    var paaas = document.signup.pass; 
    if(paaas.value!=fname.value){
        alert("Password does not match");
        fname.focus();
        return false;
    }
    }