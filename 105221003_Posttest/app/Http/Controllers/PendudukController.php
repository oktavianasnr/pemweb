<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function showForm()
    {
        return view('tampilanData');
    }

    public function submitData(Request $request)
    {
        $penduduk = Penduduk::create([
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'nomor' => $request->input('nomor'),
        ]);

        return view('dashboard', compact('penduduk'));
    }

    public function index()
    {
        $penduduks = Penduduk::all();
        return view('index', compact('penduduks'));
    }

    public function show($id)
    {
        $penduduk = Penduduk::find($id);
        return view('show', compact('penduduk'));
    }

    public function edit($id)
    {
        $penduduk = Penduduk::find($id);
        return view('edit', compact('penduduk'));
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->update([
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'nomor' => $request->input('nomor'),
        ]);

        return redirect()->route('index')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();

        return redirect()->route('index')->with('success', 'Data deleted successfully');
    }
}
