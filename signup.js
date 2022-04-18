function InvalidLogin(){
    // define variables
    var name = document.getElementById("Username")
    var email_address = document.getElementById("Email");
    var number = document.getElementById("Number");
    var address = document.getElementById("House");
    var user_password = document.getElementById("User_password");

    if(name.value.trim().length<3) {
        alert("Username is too short!");
        return false;
    }

    else if(name.value.trim() =="") {
        alert("Please enter a valid Username!");
        return false;
    }

    else if (address.value.trim().length <5) {
        alert("Please enter a valid House address!");
        return false;
    }

    else if (address.value.trim()=="") {
        alert("Please enter a valid House address!");
        return false;
    }

    else if (email_address.value.trim().length <1) {
        alert("Please enter a valid email address!");
        return false;
    }

    else if(number.value.trim().length <11) {
        alert("Invalid phone number");
        return false;
    }

    else if(user_password.value.trim().length <7){
        alert("Password is too short");
        return false;
    }

    else if(user_password.value.trim()==""){
        alert("Invalid password");
        return false;
    }
    }





