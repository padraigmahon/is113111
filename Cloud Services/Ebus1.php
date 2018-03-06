<DOCTYPE html>
    <html>
        <head>
            <title>Select Product</title>
            <link rel="stylesheet" href="Ebus1_style.css" type="text/css" />
            
            <!--jQuery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="cost_calc.js"></script>
            
        </head>
        <body>
            
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method = "POST" action="Ebus2.php">
                
                    <label class="labelSalesforce" for "salesforce">
                        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                        Saleforce @ $100
                    </label>
                    
                    <br/>
                    
                    <label class="labelCloud9" for="cloud9">
                        <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                        Cloud 9 @ $200
                    </label
                    
                    <br/>
                    <br/>
                    
                    <label class="labelAws" for="aws">
                        <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                        Amazon Web Services @ $300
                    </label>
                    
                    <br/>
                    
                    <label class="labelGmail" for="gmail">
                        <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                        Gmail @ $400
                    </label>
                   
                    <br/>
                    <br/>
                    
                    <label class="labelSubtotal" for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                    </label>
                    
                    <br/>
                    
                    <label class="labelDiscount" for="discount">
                    Discount @ 5%
                    <input type="text" id="discount" value="0.00" readonly/>
                    </label>
                    
                    <br/>
                    
                    <label class="labelVat" for="vat">
                    VAT @ 10%
                    <input type="text" id="vat" value="0.00" readonly/>
                    </label>
                    
                    <br/>
                    
                    <label class="labelTotal" for="total">
                    Total
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                    </label>
                    
                    <br/>
                    
                    <button class="buttonProceed" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
               
            </form>
            
            <br/>
            <button class="buttonCalculate" onClick="calcSub()">Calculate Cost</button>
            <a class="linkClear" role="button" href="Ebus1.php">Clear Choice</a>
            
            <!--- links for nav bar --->
            <ul>
                <li><a href="cloud_homepage.html">Welcome</a></li>
                <li><a href="about.html">About Cloud</a></li>
            </ul>
        </body>
    </html>