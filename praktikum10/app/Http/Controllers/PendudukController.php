<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 class PendudukController extends Controller
 {
 public function showFormPesan()
 {
    return view('pesan');
    }
    public function submitOrder(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'nomor' => $request->input('nomor'),
            ];
        return view('dashboard', compact('data'));
    }
}
