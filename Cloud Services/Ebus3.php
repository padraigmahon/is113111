<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="Ebus3_style.css" type="text/css" />
    </head>
    <body>
           <?php
        //Set session variables
        $_SESSION["username"] = $_POST["username"];
         $_SESSION["email"] = $_POST["email"];
        ?>
        
        
        <h1>Purchase Successful</h1>
        <h4>RECEIPT</h4>
        <br>
        <p class="Name"><?php
         //Echo session variables that were set on previous page
         echo "Name is: " . $_SESSION["username"] . ".";
         ?></p>
         <br><br>
         <p class="Email"> <?php
         //Echo session variables that were set on previous page
         echo "Email is: " . $_SESSION["email"] . ".";
         ?></p>
         <br><br>
         <p class="Total"> <?php
         //Echo session variables that were set on previous page
         echo "Total is: " . $_SESSION["total"] . ".";
         ?></p>
         
         <ul>
             <li><a href="Ebus2.php">Back</a></li>
             <li><a href="../homepage.html">Home</a></li>
         </ul>
    </body>
</html>