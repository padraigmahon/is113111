<?php
// Start the session
session_start();
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js""></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        <form method="POST" action="Ebus3.php">
            
            
            <label for="user_pin">
            PIN
            </label>
            <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
            
            
            <label for="user_name">
                Name
            </label>
                <input type="text" id="user_name" placeholder="Enter Name" name= "username">
                
             <label for="user_email">
            Email
            </label>
            <input type="email" id="user_email" placeholder="Enter Email"  name= "email">
                
            <button type="Submit" id="btnPurchase" disabled> 
                Proceed with Purchase 
            </button>
                
        </form>
        
        <br />
            
              <button class="btn-validate btn btn-yellow" onclick="validatePIN()">validate</button>
            
            <script type="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
</html>