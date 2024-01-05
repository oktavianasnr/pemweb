<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\OngkirController;

Route::get('/cekOngkir', [OngkirController::class,'index']);

Route::post('/cekOngkir', [OngkirController::class,'cekOngkir']);
