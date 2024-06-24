
function nameCheck(event) {
    var key = event.keyCode || event.which;
    var isUppercaseLetter = (key >= 65 && key <= 90); // Check if the key is an uppercase letter (A-Z)
    var isLowercaseLetter = (key >= 97 && key <= 122); // Check if the key is a lowercase letter (a-z)
    var isSpace = (key === 32); // Check if the key is a space character
 
    // Check if the key pressed is a number, an alphabet, or a space
    if (!(isUppercaseLetter || isLowercaseLetter || isSpace)) {
        event.preventDefault(); // Prevent the keypress event from inserting the character
    }
}   

function emailCheck() {
    var value = document.getElementById("email").value;
    var x = /^[\w\.-]+@[\w\.-]+\.\w+$/;
    if(!value.match(x)){
        document.getElementById("emailp").style.color="red";
        document.getElementById("emailp").innerHTML="Email address must be in valid format with @ symbol!";
    }
    else{
        document.getElementById("emailp").innerHTML="";
    }
}
function passCheck(){
    var value=document.getElementById("password").value;
    var x=/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,12}$/;
    if(value.match(x)){
        document.getElementById("passp").innerHTML="";
    }
    else{
        document.getElementById("passp").style.color="red";
        document.getElementById("passp").innerHTML="Password must have one uppercase,lowercase,<br>digit,special character & 8-12 characters!";
    }
}

function phoneCheck(){
    var value=document.getElementById("phone").value;
    var x=/^[0-9]{10}$/;
    if(value.match(x)){
        document.getElementById("phonep").innerHTML="";
       
    }
    else{
        document.getElementById("phonep").style.color="red";
        document.getElementById("phonep").innerHTML="Mobile number must have 10 digits!";
    }
}  //for phoneCheck() start
    function validateNumbersOnly(event) {
        var key = event.keyCode || event.which;

        // Check if the key pressed is a number (0-9) or a special key
        if (!(key >= 48 && key <= 57) && key !== 8 && key !== 9 && key !== 13 && key !== 37 && key !== 39 && key !== 46) {
        event.preventDefault(); // Prevent the keypress event from inserting the character
        }
    }
//for phoneCheck() end
function confirmCheck(){
    value1=document.getElementById("password").value;
    value2=document.getElementById("cpassword").value;
    if(value1==value2 && value2.length!=0){
        document.getElementById("cpassp").innerHTML="";
    }
    else{
        document.getElementById("cpassp").style.color="red";
        document.getElementById("cpassp").innerHTML="Password does not match";
    }
}

function clearError(){
    document.getElementById("namep").innerHTML="";
    document.getElementById("emailp").innerHTML="";
    document.getElementById("passp").innerHTML="";
    document.getElementById("phonep").innerHTML="";
    document.getElementById("cpassp").innerHTML="";
}