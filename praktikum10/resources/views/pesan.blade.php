<!--resources/views/pesan.blade.php-->
 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale())
 }}">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width,
 initial-scale=1">
 <title>Data Penduduk</title>
 <!--Fonts-->
 <link rel="preconnect" href="https://fonts.bunny.net">
 </head>
 <body>
 <h1>Form Data Penduduk</h1>
 <form method="post" action="{{ route('submit-order')
 }}">
 @csrf
 <label for="nik">NIK : </label>
 <input type="text" id="nik" name="nik"
 required><br><br>
 <label for="name">Nama : </label>
 <input type="text" id="name" name="name"
 required><br><br>
 <label for="provinsi">Provinsi : </label>
 <input type="text" id="provinsi" name="provinsi"
 required><br><br>
 <label for="kota">Kota : </label>
 <input type="kota" id="kota" name="kota"
 required><br><br>
 <label for="nomor">Nomor Telepon : </label>
 <input type="nomor" id="nomor" name="nomor"
 required><br>

 <br>
 <button type="submit">Submit Data</button>
</form>
 </body>
 </html>