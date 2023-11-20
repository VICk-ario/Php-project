<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spurs</title>
    <link rel="stylesheet"  href="C:\Users\USER\Desktop\Hello World\otherstyles.css">
</head>
<body> 
    <div class="beggining">
        <h1>Tottenham Hotspur FC News</h1>
        <p>We give you the best news about the best football club in North London</p>
    </div>
    
    <div class="Navbar">
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="discover.php">About Us</a></li>
            <li><a href="blog.php">Find blogs</a></li> 
            <?php
            if (isset($_SESSION["useruid"])){
           echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
             }
             else {
            echo "<li><a href='signup.php'>Sign up</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";

             }

            ?> 
          </ul>
    </div>