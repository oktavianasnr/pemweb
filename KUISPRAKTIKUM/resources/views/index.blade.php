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
    <center><h1>Data Member GYM</h1></center>
    <center><a href="{{ route('show-form') }}">Tambah Member</a></center>
    <div>
        @if (count($members) > 0)
        <center>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->alamat }}</td>
                            <td>{{ $member->kontak }}</td>
                            <td>{{ $member->email }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $member->id]) }}">Edit</a>
                                <form method="post" action="{{ route('delete', ['id' => $member->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <center><button type="submit">Hapus</button></center>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
        @else
            <p>Tidak ada data member.</p>
        @endif
    </div>
</body>
</html>

