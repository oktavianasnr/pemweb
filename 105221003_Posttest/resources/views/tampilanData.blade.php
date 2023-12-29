<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Penduduk</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #8294C4;
            color: #333;
            margin: 20px;
        }

        h1 {
            color: #65647C;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        .container {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #ACB1D6;
            text-align: center;
            border-radius: 20px;
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 30px;
            margin-bottom: 30px;
            padding-top: 50px;
            padding-bottom: 50px;
            color: black;
        }

        button {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #818FB4;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 10px;
            margin-top: auto;
        }

        a {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #818FB4;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
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
    <h1>Form Data Penduduk</h1>
    <div class="container">
        <p>Silahkan isi form berikut!!!</p>
        <form method="post" action="{{ route('submit-data') }}">
            @csrf
            <label for="nik">NIK</label><br>
            <input type="text" id="nik" name="nik" required><br><br>
            <label for="name">Nama</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="provinsi">Provinsi</label><br>
            <input type="text" id="provinsi" name="provinsi" required><br><br>
            <label for="kota">Kota</label><br>
            <input type="text" id="kota" name="kota" required><br><br>
            <label for="nomor">Nomor Telepon</label><br>
            <input type="text" id="nomor" name="nomor" required><br>

            <br>
            <button type="submit">Submit Data</button>
            <a href="{{ route('index') }}">Kembali</a>
        </form>
    </div>
</body>
</html>
