/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
    }
    else if(document.getElementById('aws').checked) {
        argSubTotal = 300;
    } 
    else if(document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }
    else if(document.getElementById('gmail').checked) {
        argSubTotal = 400;
          }
          
     else  {
        alert("Please select a product!");
    }
    
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal) {
    
        var subtotal = parmSubTotal
        var discountAmt
        var vatAmt
        var Total
        
        discountAmt = (parmSubTotal * 0.05);
  
        vatAmt = ((parmSubTotal - discountAmt) * 0.1);
  
        Total = ((parmSubTotal + vatAmt) - discountAmt);
        
        display(subtotal, discountAmt, vatAmt, Total);
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}



function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}