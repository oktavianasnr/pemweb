<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('tht10');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/komentar', function () {
    return view('komentar');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/indonesia', function () {
    return view('indonesia');
});
