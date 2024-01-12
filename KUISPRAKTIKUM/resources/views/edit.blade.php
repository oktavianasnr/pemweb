<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Member</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #8294C4;
            color: #333;
            margin: 20px;
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
            padding-top: 20px;
            padding-bottom: 20px;
            color: black;
        }

        a {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #ACB1D6;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <h1>Edit Data Member</h1>

    <form method="post" action="{{ route('update', ['id' => $member->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Nama</label><br>
        <input type="text" id="name" name="name" value="{{ $member->name }}" required><br><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" id="alamat" name="alamat" value="{{ $member->alamat }}" required><br><br>
        <label for="kontak">Kontak</label><br>
        <input type="text" id="kontak" name="kontak" value="{{ $member->kontak }}" required><br><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" value="{{ $member->email }}" required><br>

        <br>
        <button type="submit">Update Data</button>
    </form>
    <br>
    <a href="{{ route('index') }}">Kembali ke Daftar Penduduk</a>
</body>
</html>

