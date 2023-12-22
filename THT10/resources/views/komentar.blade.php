<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="komentar.css">
    <title>World Flavours</title>
</head>
<body>
    <header>
        <h1><span class="global">GLOBAL</span> <span class="culinary">CULINARY</span> <span class="flavors">FLAVORS</span></h1>
        <p>Uncover the World's Culinary Treasures</p>
    </header>
    <div class="batas"></div>
    <h2 style="text-align:center;">Komentar Website World Flavours</h2>
    <div id="hasilKomentar"></div>

    <a href="/" class="link-back">Back</a>

    <script>
        const semuaHasilKomentar = document.getElementById("hasilKomentar");

        const queryString = window.location.search;
        const parameterUrl = new URLSearchParams(queryString);
        const nilaiParameterKomentar = parameterUrl.get('comments');

        if (nilaiParameterKomentar) {
            const arrayKomentar = decodeURIComponent(nilaiParameterKomentar).split(",");
            const listKomentar = arrayKomentar.map(comment => `<li>${comment}</li>`).join('');
            semuaHasilKomentar.innerHTML = `<ul>${listKomentar}</ul>`;

            const komentarUser = semuaHasilKomentar.querySelector('ul');
            if (komentarUser) {
                const komentarPertama = komentarUser.querySelector('li');
                if (komentarPertama) {
                    komentarPertama.classList.add('first-comment');
                }
            }
        } else {
            semuaHasilKomentar.innerHTML = "<p>Belum terdapat komentar yang dikirimkan pengguna.</p>";
        }
    </script>
</body>
</html>
