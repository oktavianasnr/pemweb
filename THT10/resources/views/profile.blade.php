<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        header {
            background-color: #5B5B5B;
            color: #EEE0C9;
            text-align: center;
            padding: 20px;
            }

        h2 {
            background-color: #B67171;
            text-align: center;
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 10px;
            height: 30px;
            color: #EEE0C9;
        }
  
        body {
            font-family:'Lucida Sans','Lucida Sans Regular','Lucida Grande','Lucida Sans Unicode',sans-serif;
            background-color: #C19065;
            margin: 0;
            padding: 0;
        }

        .global {
            color: #D8C292; 
        }
        .culinary{
            color: #B67171; 
        }
        .flavors{
            color: #C19065; 
        } 
        
        .welcome{
            background-color: #EEE0C9;
            text-align: center;
            border-radius: 20px;
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 100px;
            margin-bottom: 100px; 
            padding-top: 50px;
            padding-bottom: 50px;
            color: black;
        }

        a{
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #EEE0C9;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px;    
            margin-bottom: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
    <h1><span class="global">GLOBAL</span> <span class="culinary">CULINARY</span> <span class="flavors">FLAVORS</span></h1>
    <p>Uncover the World's Culinary Treasures</p>
    </header>
    <h2><div class="batas"></div></h2>
    <?php
    session_start();

    //mengecek pengguna sudah login atau belum
    if (!isset($_SESSION['username'])) {
        //jika belum login, pengguna akan diarahkan ke halaman login
        header("Location: /profile");
        exit();
    }
    ?>

    <div class="welcome">Selamat datang di World Flavours, <?php echo $_SESSION['username']; ?>!
    <p>Anda dapat melakukan eksplorasi lebih banyak mengenai kuliner dunia.</p></div>
    <a href="/logout">Logout</a>
</body>
</html>
