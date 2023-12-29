@extends('layouts.app')

@section('content')
    <h1>Data Penduduk</h1>
    <a href="{{ route('show-form') }}">Tambah Data Penduduk</a>
    <div>
        @if (count($penduduks) > 0)
        <center>
            <table border="1">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Nomor Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduks as $penduduk)
                        <tr>
                            <td>{{ $penduduk->nik }}</td>
                            <td>{{ $penduduk->name }}</td>
                            <td>{{ $penduduk->provinsi }}</td>
                            <td>{{ $penduduk->kota }}</td>
                            <td>{{ $penduduk->nomor }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $penduduk->id]) }}">Edit</a>
                                <form method="post" action="{{ route('delete', ['id' => $penduduk->id]) }}">
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
            <p>Tidak ada data penduduk.</p>
        @endif
    </div>
@endsection

