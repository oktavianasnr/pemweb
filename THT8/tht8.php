<?php
$hasilInput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //mengambil nilai dari form
    $nama = $_POST["nama"];
    $namaKuliner = $_POST["namaKuliner"];

    $hasilInput = "Terima kasih, $nama, sudah berbagi kuliner favorit Anda. $namaKuliner merupakan kuliner yang banyak disukai. Nikmati kekayaan cita rasa kuliner lain!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tht8.css">
    <title>World Flavours</title>
</head>
<body>
    <header>
        <h1><span class="global">GLOBAL</span> <span class="culinary">CULINARY</span> <span class="flavors">FLAVORS</span></h1>
        <p>Uncover the World's Culinary Treasures</p>
    </header>
    
    <nav>
        <a href="login.php">Akun</a>
        <a href="#">Beranda</a>
        <a href="#">Menu</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Kontak</a>
    </nav>
    <br>
    
    <div class="container">
        <div class="gambar">
            <img src="https://www.pegipegi.com/travel/wp-content/uploads/2017/07/Indonesia-recipe-rendang-beef.jpg" alt="Rendang"width="300px" height="250">
            <h3>Rendang</h3>
        </div>
        <div class="gambar">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh0XPr1HKj5VO7JX7aGiLMH_HQnL2c7qP5VICp7Sk38Ntbp7E9pZPh82CqOn86toEocdygFrKwK6vcj58PbwOUJTPV0owrbRjaP7RSG-7ILlduDmI6DWPou6aZUHaXctOUKB_i684dONM9__Y97TpJvJVaKRpmF2TGEm-KkKoZKNQhCFVI9GcaybMYw/s1440/Sushi%20Indonesia.jpeg" alt="Sushi" width="300px" height="250">
            <h3>Sushi</h3>
        </div>
        <div class="gambar">
            <img src="https://images6.alphacoders.com/812/812268.jpg" alt="Lasagna" width="300px" height="250">
            <h3>Lasagna</h3>
        </div>
    </div>
    
    <div class ="description", style="text-align:justify">
        <p>Situs web "Global Culinary Flavors" memiliki tujuan utama untuk menghadirkan pengalaman kuliner yang mendalam dan menginspirasi kepada para pengunjungnya. Kami memahami bahwa makanan adalah bahasa universal yang menghubungkan orang dari berbagai budaya dan latar belakang. Kami tertarik pada kuliner global karena itu adalah 
        jendela keanekaragaman budaya di seluruh dunia. Makanan adalah cara unik untuk memahami sejarah, tradisi, dan perbedaan budaya dari berbagai negara. Melalui situs web ini, kami ingin mengajak Anda untuk menjelajahi rasa dunia, mencicipi makanan dari tempat-tempat yang mungkin belum pernah Anda kunjungi, dan merayakan kekayaan 
        kuliner yang menarik dari berbagai budaya. Kami percaya bahwa makanan adalah salah satu cara terbaik untuk memperdalam pemahaman kita tentang dunia dan meningkatkan rasa saling menghargai di antara berbagai komunitas di seluruh dunia. Selamat datang di situs web kami, di mana kami bersama-sama merayakan kelezatan dan keragaman 
        kuliner global.</p>
    </div>


    <div class="container">
        <div class="food-item">
            <img src="https://www.masakapahariini.com/wp-content/uploads/2020/10/makanan-khas-korea-selatan-tteokbokki.jpg" alt="Tteokbokki">
            <h2>Tteokbokki</h2>
            <p>Deskripsi singkat tentang Tteokbokki.</p>
        </div>

        <div class="food-item">
            <img src="https://www.masakapahariini.com/wp-content/uploads/2021/03/ramen-jepang-ayam.jpg" alt="Ramen">
            <h2>Ramen</h2>
            <p>Deskripsi singkat tentang Ramen.</p>
        </div>

        <div class="food-item">
            <img src="https://img.freepik.com/premium-photo/perfect-breakfast-croissant-sandwich-with-mortadella-sausage-avocado-cheese-sauce-gray-plate-selective-focus_207126-4917.jpg" alt="Croissant">
            <h2>Croissant</h2>
            <p>Deskripsi singkat tentang Croissant.</p>
        </div>
    </div>
      
    <div class = "grid-container"> 
        <div class = "menu item">Kuliner Berbagai Negara</div> 
        <div class = "menu"><a href="indonesia.html">Indonesia</a></div> 
        <div class = "menu"><a href="#Jepang">Jepang</a></div> 
        <div class = "menu"><a href="#Korea">Korea</a></div> 
        <div class = "menu"><a href="#Thailand">Thailand</a></div> 
        <div class = "menu"><a href="#Vietnam">Vietnam</a></div> 
        <div class = "menu"><a href="#Italia">Italia</a></div> 
        <div class = "menu"><a href="#China">China</a></div> 
        <div class = "menu"><a href="#Prancis">Prancis</a></div> 
        <div class = "menu"><a href="#Jerman">Jerman</a></div>
    </div> 
  
    <div class="layout">
        <main class="form">
            <h3>Kuliner Favorit</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form">
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda">
                <br><br>
                <label for="namaKuliner">Kuliner yang disukai : </label>
                <input type="text" id="namaKuliner" name="namaKuliner" placeholder="Masukkan kuliner favorit Anda">
                <br><br>
                <button type="submit">Submit</button>
                <br>
                <h3><div id="hasilInput"><?php echo $hasilInput; ?></div></h3>
            </form>
        </main>

        <aside class="rate">
            <form id="rateForm">
                <p>Rating website Global Culinary Flavors : </p>
    
                <input type="radio" name="rating" value="1" id="rate">
                <label for="rate1">1</label><br>
    
                <input type="radio" name="rating" value="2" id="rate">
                <label for="rate2">2</label><br>
    
                <input type="radio" name="rating" value="3" id="rate">
                <label for="rate3">3</label><br>
    
                <input type="radio" name="rating" value="4" id="rate">
                <label for="rate4">4</label><br>
    
                <input type="radio" name="rating" value="5" id="rate">
                <label for="rate5">5</label><br><br>
    
                <button type="submit">Submit</button>
                <br>
                <h3><div id="hasilRate"></div></h3>
            </form>
        </aside>
    </div>
    
    <nav class="comment">
        <form action="proses.php" method="post" id="komentarForm">
            <h2>Kirim Komentar</h2>
            <label for="komentar">Komentar : </label>
            <textarea id="komentar" name="komentar" rows="4" required placeholder="Tulis komentar Anda di sini..."></textarea>
            <br>
            <button type="button" onclick="submitKomentar()">Submit</button>
            <button type="button" onclick="lihatKomentar()">Lihat Komentar</button>
            <br>
            <h3><div id="hasilKomentar"></div></h3>
        </form>
    </nav>
    
    <footer>
        &copy; 2023 World Flavours - Hak Cipta Dilindungi
    </footer>

    <script src="tht8.js"></script>
</body>
</html>
