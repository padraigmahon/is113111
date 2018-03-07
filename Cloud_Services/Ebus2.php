<?php
// Start the session
session_start();
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="Ebus2_style.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js""></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        <form method="POST" action="Ebus3.php">
            
            
            <label class="labelPin" for="user_pin">
                PIN
            </label>
            <input class="txtPin" type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
            
            
            <label class="labelName" for="user_name">
                Name
            </label>
                <input class="txtName" type="text" id="user_name" placeholder="Enter Name" name= "username">
                
             <label class="labelEmail" for="user_email">
                Email
            </label>
            <input class="txtEmail" type="email" id="user_email" placeholder="Enter Email"  name= "email">
                
            <button class="buttonPurchase" type="Submit" id="btnPurchase" disabled> 
                Proceed with Purchase 
            </button>
                
        </form>
        
        <br/>
            
            <button class="buttonValidate" onclick="validatePIN()">validate</button>
            
            <script type="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        <ul>
            <li><a href="Ebus1.php">Back</a></li>
        </ul>    
        
    </body>
</html>