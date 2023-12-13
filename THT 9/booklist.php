<?php
require_once 'member.php';

session_start();

//memeriksa apakah member telah melakukan registrasi atau pendaftaran
if (!isset($_SESSION['member'])) {
    header("Location: register.php");
    exit();
}

$member = $_SESSION['member'];

//daftar buku
$books = [
    ['title' => 'Laut Bercerita', 'id' => 'A01', 'author' => 'Leila S. Chudori'],
    ['title' => 'Perahu Kertas', 'id' => 'A02', 'author' => 'Dewi Lestari'],
    ['title' => 'The Hunger Games', 'id' => 'A03', 'author' => 'Suzanne Collins'],
    ['title' => 'Rembulan Tenggelam di Wajahmu', 'id' => 'A04', 'author' => 'Tere Liye'],
    ['title' => 'Rumah Kaca', 'id' => 'A05', 'author' => 'Pramoedya Ananta Toer'],
    ['title' => 'The Chronicles of Narnia', 'id' => 'A06', 'author' => 'C.S. Lewis'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List-Library System</title>
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

        .bookList {
            background-color: #D5B4B4;
            text-align: center;
            border-radius: 20px;
            margin-left: 80px;
            margin-right: 80px;
            margin-top: 30px;
            margin-bottom: 30px; 
            padding-top: 10px;
            padding-bottom: 10px;
            color: black;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto; 
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .action {
            background-color: #D5B4B4;
            text-align: center;
            border-radius: 20px;
            margin-left: 500px;
            margin-right: 500px;
            margin-top: 100px;
            margin-bottom: 100px; 
            padding-top: 50px;
            padding-bottom: 50px;
            color: black;
        }

        a {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #E4D0D0;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px;    
            margin-bottom: 10px;
            margin-top: auto;
        }

        ul {
            list-style: none; 
            padding-left: 0; 
            margin: 0;
        }

        li {
            display: inline;
            margin-right: 10px;
            margin-left: 10px;

        }
    </style>
</head>
<body>
    <header>
        <h1><span class="library">LIBRARY SYSTEM</span></h1>
        <p>Smart Libraries for Bright Futures</p>
    </header>
    <div class="batas"></div>
    <div class="bookList">
    <h1>Library System - Book List</h1>
    <p>Welcome, <?php echo $member->getName(); ?>! <br>
    Check out the book list below</p>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ID</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?php echo $book['title']; ?></td>
                        <td><?php echo $book['id']; ?></td>
                        <td><?php echo $book['author']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <p>Please choose a menu below, Thank You </p>
        <ul>
            <li><a href="borrow.php">Borrow</a></li>
            <li><a href="return.php">Return</a></li>
        </ul>
    </div>
</body>
</html>
