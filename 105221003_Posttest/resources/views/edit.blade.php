@extends('layouts.app')

@section('content')
    <h1>Edit Data Penduduk</h1>

    <form method="post" action="{{ route('update', ['id' => $penduduk->id]) }}">
        @csrf
        @method('PUT')
        <label for="nik">NIK</label><br>
        <input type="text" id="nik" name="nik" value="{{ $penduduk->nik }}" required><br><br>
        <label for="name">Nama</label><br>
        <input type="text" id="name" name="name" value="{{ $penduduk->name }}" required><br><br>
        <label for="provinsi">Provinsi</label><br>
        <input type="text" id="provinsi" name="provinsi" value="{{ $penduduk->provinsi }}" required><br><br>
        <label for="kota">Kota</label><br>
        <input type="text" id="kota" name="kota" value="{{ $penduduk->kota }}" required><br><br>
        <label for="nomor">Nomor Telepon</label><br>
        <input type="text" id="nomor" name="nomor" value="{{ $penduduk->nomor }}" required><br>

        <br>
        <button type="submit">Update Data</button>
    </form>
    <a href="{{ route('index') }}">Kembali ke Daftar Penduduk</a>
@endsection
