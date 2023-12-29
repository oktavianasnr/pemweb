<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

Route::get('/tampilanData', [PendudukController::class, 'showForm'])->name('show-form');
Route::post('/submit-data', [PendudukController::class, 'submitData'])->name('submit-data');

Route::get('/penduduk', [PendudukController::class, 'index'])->name('index');
Route::get('/penduduk/{id}', [PendudukController::class, 'show'])->name('show');
Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('edit');
Route::put('/penduduk/{id}/update', [PendudukController::class, 'update'])->name('update');
Route::delete('/penduduk/{id}/delete', [PendudukController::class, 'destroy'])->name('delete');

Route::get('/', function () {
    return redirect()->route('index');
});
