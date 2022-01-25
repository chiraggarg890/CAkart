function notEmpty(elem1, elem2, helperMsg) {
  if (elem1.value.length == 0) {
    alert(helperMsg);
    elem1.focus();
    return false;
  } else if (elem2.value.length == 0) {
    alert(helperMsg);
    elem2.focus();
    return false;
  }
  return true;
}
function isNumeric(elem, helperMsg) {
  var numericExpression = /^[0-9]+$/;
  if (elem.value.match(numericExpression)) {
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }
}
function isAlphabet(elem, helperMsg) {
  var alphaExp = /^[a-zA-Z]+$/;
  if (elem.value.match(alphaExp)) {
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }
}
function lengthRestriction(elem, min, max, helperMsg) {
  var uInput = elem.value;
  if (uInput.length >= min && uInput.length <= max) {
    return true;
  } else {
    // alert("Please enter between " +min+ " and " +max+ " characters");
    alert(helperMsg);
    elem.focus();
    return false;
  }
}
function madeSelection(elem, helperMsg) {
  if (elem.value == "Please Choose") {
    alert(helperMsg);
    elem.focus();
    return false;
  } else {
    return true;
  }
}
function emailValidator(elem, helperMsg) {
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
  if (elem.value.match(emailExp)) {
    return true;
  } else {
    alert(helperMsg);
    elem.focus();
    return false;
  }
}

{/* <input
  type="button"
  onclick="notEmpty(document.getElementById('f1name'), 'Please Enter a Value'),isAlphabet(document.getElementById('f1name'),'Enter a valid name')
        ,isNumeric(document.getElementById('zip'),'Enter a Valid Zip Code'),lengthRestriction(document.getElementById('zip'),6,6,'Please Enter Valid Zip Code'),lengthRestriction(document.getElementById('Username'),6,8,'Please enter between 6 to 8 characters in Username'),isAlphabet(document.getElementById('Username'),'Enter a valid Username'),emailValidator(document.getElementById('Email'),'Please Enter a valid Email')"
  value="Check Form"
/>; */}
