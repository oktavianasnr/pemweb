<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member GYM</title>
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

      a{
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #ACB1D6;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 10px;
            margin-top: auto;
      }
    </style>

</head>
<body>
   <h1>Pendaftaran Member GYM</h1>

   <div class="container">
    <p>Nama : {{ $member->name }}</p>
    <p>Alamat : {{ $member->alamat }}</p>
    <p>Kontak : {{ $member->kontak }}</p>
    <p>Email : {{ $member->email }}</p>
    <p>Terima kasih telah mengisi form pendaftaran member</p>
   </div>

   <a href="{{ route('show-form') }}">Kembali</a>
</body>
</html>
