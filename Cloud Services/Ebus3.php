<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
           <?php
        //Set session variables
        $_SESSION["username"] = $_POST["username"];
         $_SESSION["email"] = $_POST["email"];
        ?>
        <h4>RECEIPT</h4>
        <br>
        <?php
         //Echo session variables that were set on previous page
         echo "Name is " . $_SESSION["username"] . ".";
         ?>
         <br>
         <?php
         //Echo session variables that were set on previous page
         echo "Email is " . $_SESSION["email"] . ".";
         ?>
         <br>
         <?php
         //Echo session variables that were set on previous page
         echo "Total is " . $_SESSION["total"] . ".";
         ?>
    </body>
</html>