/* global $ */

 function validatePIN(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
     
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
      enterName();
    }
}
        
function enterName(){
    
    var Name = document.getElementById("user_name").value;
    var x = /^[A-Za-z\s]+$/
    
    if (Name == ""){
        alert("Please enter your Name");
    }
    else if (x.test(Name) == false){
        alert("Please enter a Name");
    }
    else{
    enterEmail(); 
    }
}

function enterEmail(){
    
    var Email = document.getElementById("user_email").value;
    var y = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    
    if (Email == ""){
        alert("Please enter your Email");
    }
    else if (y.test(Email) == false){
        alert("Please enter a valid Email");
    }
    else {
        enablebtnPurchase();
    }
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}