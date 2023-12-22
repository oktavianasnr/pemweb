<?php
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PendudukController;
 Route::get('/pesan', [PendudukController::class,
 'showFormPesan'])->name('show-form-pesan');
 Route::post('/submit-order', [PendudukController::class,
 'submitOrder'])->name('submit-order');
 Route::get('/', function () {
 return redirect()->route('show-form-pesan'); // Ubah rute ke show-form-pesan
 });