<?php
require_once 'process.php';
require_once 'member.php';
require_once 'book.php';

session_start();

//memeriksa pengguna sudah terdaftar sebagai member
if (!isset($_SESSION['member'])) {
    header("Location: register.php");
    exit();
}

$member = $_SESSION['member'];
$returnInfo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $returnedBookId = isset($_POST['returnedBookId']) ? $_POST['returnedBookId'] : '';
    $returnedBookTitle = isset($_POST['returnedBookTitle']) ? $_POST['returnedBookTitle'] : '';
    $returnedBookAuthor = isset($_POST['returnedBookAuthor']) ? $_POST['returnedBookAuthor'] : '';
    $returnDate = isset($_POST['returnDate']) ? $_POST['returnDate'] : '';

    //membuat objek buku dan objek pengembalian jika sudah terdapat nilai yang diinputkan
    if ($returnedBookId && $returnedBookTitle && $returnedBookAuthor && $returnDate) {
        $returnedBook = new Book($returnedBookTitle, $returnedBookId, $returnedBookAuthor);
        $return = new Loan($member, $returnedBook, $returnDate);
        $returnInfo = $return->displayLoanInfo();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return-Library System</title>
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

        .return {
            background-color: #D5B4B4;
            text-align: center;
            border-radius: 20px;
            margin-left: 120px;
            margin-right: 120px;
            margin-top: 30px;
            margin-bottom: 30px; 
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
        
        .info {
            background-color: #E4D0D0;
            text-align: center;
            border-radius: 20px;
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 10px;
            margin-bottom: 10px; 
            padding-top: 10px;
            padding-bottom: 10px;
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1><span class="library">LIBRARY SYSTEM</span></h1>
        <p>Smart Libraries for Bright Futures</p>
    </header>
    <div class="batas"></div>
    <div class="return">
    <h1>Library System - Return</h1>
    <p>Hello, <?php echo $member->getName(); ?>! Kindly provide the details of the book you wish to borrow.</p>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="returnedBookId">Book ID</label><br>
            <select name="returnedBookId" required>
                <option value="A01">A01</option>
                <option value="A02">A02</option>
                <option value="A03">A03</option>
                <option value="A04">A04</option>
                <option value="A05">A05</option>
                <option value="A06">A06</option>
            </select><br><br>

            <label for="returnedBookTitle">Book Title</label><br>
            <select name="returnedBookTitle" required>
                <option value="Laut Bercerita">Laut Bercerita</option>
                <option value="Perahu Kertas">Perahu Kertas</option>
                <option value="The Hunger Games">The Hunger Games</option>
                <option value="Rembulan Tenggelam di Wajahmu">Rembulan Tenggelam di Wajahmu</option>
                <option value="Rumah Kaca">Rumah Kaca</option>
                <option value="The Chronicles of Narnia">The Chronicles of Narnia</option>
            </select><br><br>

            <label for="returnedBookAuthor">Book Author</label><br>
            <select name="returnedBookAuthor" required>
                <option value="Leila S. Chudori">Leila S. Chudori</option>
                <option value="Dewi Lestari">Dewi Lestari</option>
                <option value="Suzanne Collins">Suzanne Collins</option>
                <option value="Tere Liye">Tere Liye</option>
                <option value="Pramoedya Ananta Toer">Pramoedya Ananta Toer</option>
                <option value="C.S. Lewis">C.S. Lewis</option>
            </select><br><br>

            <label for="returnDate">Return Date</label><br>
            <input type="date" name="returnDate" required><br><br>

        <input type="submit" value="Return">
    </form>

    <div class="info">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p>$returnInfo</p>";
        }
        ?>
        </div>
    </div>

    <p><a href='index.php'>Back</a></p>

</body>
</html>
