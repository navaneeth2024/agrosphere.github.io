function userChange(){
    document.getElementById("loginerror2").innerHTML="";
}
function phoneCheck(){ 
    var usertype = document.getElementById("utype");
    if(usertype.value=="admin"){
        document.getElementById("loginerror2").innerHTML="";
    }
    else if(usertype.value=="user"){
    var value=document.getElementById("usernum").value;
    var x=/^[0-9]{10}$/;
    if(value.match(x)){
        document.getElementById("loginerror2").innerHTML="";
    }
    else{
        document.getElementById("loginerror2").style.color="red";
        document.getElementById("loginerror2").innerHTML="Phone number must have 10 digits!";
    }
   }
}
function passCheck(){
    var usertype = document.getElementById("utype");
    if(usertype.value=="admin"){
        document.getElementById("loginerror2").innerHTML="";
    }
    else if(usertype.value=="user"){
    var value=document.getElementById("pass").value;
    var x=/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,12}$/;
    if(value.match(x)){
        document.getElementById("loginerror3").innerHTML="";
    }
    else{
        document.getElementById("loginerror3").style.color="red";
        document.getElementById("loginerror3").innerHTML="Password must have one uppercase,lowercase,<br>digit,special character & 8-12 characters!";
    }
  }
}
function validateNumbersOnly(event) {
    var key = event.keyCode || event.which;

    // Check if the key pressed is a number (0-9) or a special key
    if (!(key >= 48 && key <= 57) && key !== 8 && key !== 9 && key !== 13 && key !== 37 && key !== 39 && key !== 46) {
      event.preventDefault(); // Prevent the keypress event from inserting the character
    }
}

function clearError(){
    document.getElementById("loginerror2").innerHTML="";
    document.getElementById("loginerror3").innerHTML="";
}







