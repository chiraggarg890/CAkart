function validate() {  
  var fname = document.reg_form.username;  
  var paaas = document.reg_form.pass;  
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