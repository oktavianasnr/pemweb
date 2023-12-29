<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class FormController extends Controller
{
    public function handleForm(Request $request)
    {
        $hasilInput = "";

        //memproses input form
        if ($request->isMethod('post')) {
            $nama = $request->input('nama');
            $namaKuliner = $request->input('namaKuliner');

            $hasilInput = "Terima kasih, $nama, sudah berbagi kuliner favorit Anda. $namaKuliner merupakan kuliner yang banyak disukai. Nikmati kekayaan cita rasa kuliner lain!";
        }

        return view('tht11', ['hasilInput' => $hasilInput]);
    }
}
