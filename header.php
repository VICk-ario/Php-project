<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spurs</title>
    <style>  .beggining { 
   background-color: rgb(5, 5, 137); 
   color: papayawhip ;
    padding: 20px;
     text-align: center;
     }
     .Navbar {
        text-align: center;
        background-color: rgb(1, 1, 66);
        color: white;
        margin: 0;
        padding: 0;
        overflow: hidden;
     }
     .nav li  { 
        float: center;
        list-style-type: none;
        display: inline;
        font-size: 20px;
        border-right: 1px solid #bbb;
        padding: 20px;
      } </style>
</head>
<body> 
    <div class="beggining">
        <h1>Tottenham Hotspur FC News</h1>
        <p>We give you the best news about the best football club in North London</p>
    </div>
    
    <div class="Navbar ">
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
