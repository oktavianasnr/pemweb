<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'key'=>'e1ed34e51da75cf187718719e3c30561'
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response['rajaongkir']['results'];
        return view('cekOngkir', ['cities' => $cities,'ongkir' => '']);
    }

    public function cekOngkir(Request $request)
    {
        $response = Http::withHeaders([
            'key'=>'e1ed34e51da75cf187718719e3c30561'
        ])->get('https://api.rajaongkir.com/starter/city');

        $responseCost = Http::withHeaders([
            'key'=>'e1ed34e51da75cf187718719e3c30561'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => $request->weight,
            'courier' => $request->courier,
        ]);

        $cities = $response['rajaongkir']['results'];
        $ongkir = $responseCost['rajaongkir'];
        //dd($ongkir);
        return view('cekOngkir', ['cities' => $cities, 'ongkir' => $ongkir]);
    }
}
