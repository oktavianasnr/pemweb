<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Library System</title>
    <style>
        header {
        background-color: #867070;
        color: #EEE0C9;
        text-align: center;
        padding: 20px;
        }

        .batas{
            background-color: #E4D0D0;
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            height: 30px;
        }
  
        body {
        font-family:'Lucida Sans','Lucida Sans Regular','Lucida Grande','Lucida Sans Unicode',sans-serif;
        background-color: #F5EBEB;
        margin: 0;
        padding: 0;
        }

        .library {
            color: #D8C292; 
        }

        .welcome {
            background-color: #D5B4B4;
            text-align: center;
            border-radius: 20px;
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 100px;
            margin-bottom: 100px; 
            padding-top: 50px;
            padding-bottom: 50px;
            color: black;
        }

        a{
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #E4D0D0;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px; 
            margin-right: 30px;   
            margin-bottom: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1><span class="library">LIBRARY SYSTEM</span></h1>
        <p>Smart Libraries for Bright Futures</p>
    </header>
    <div class="batas"></div>

    <div class="welcome">
    <p>Welcome to the Library System,</p>
    <p>Kindly register before borrowing books.</p>
    <p>Thank You!!!</p>

    <a href="register.php">Register</a></div>

</body>
</html>
