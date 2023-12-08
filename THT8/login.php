<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login{
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #EEE0C9;
            border-radius: 30px;
            margin-left: 400px;
            margin-right: 400px;
            margin-top: 50px;
            margin-bottom: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        button{
            background-color: #f0d9b3;
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
    <h2><div class="batas">LOGIN AKUN</div></h2>
    <?php
    session_start();

    //memeriksa proses login pengguna
    if (isset($_SESSION['username'])) {
        //jika pengguna sudah login, pengguna diarahkan ke halaman profil
        header("Location: profile.php");
        exit();
    }

    //proses form login setelah data dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $_SESSION['username'] = $username;
        header("Location: profile.php");
        exit();
    }
    ?>
    <div class="login">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h4><label for="username">Username : </label></h4>
        <input type="text" id="username" name="username" required>
        <br>
        <h4><label for="password">Password : </label></h4>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
        <br><br>
    </form>
    </div>

    <a href="tht8.php">Kembali ke Beranda</a>
</body>
</html>
