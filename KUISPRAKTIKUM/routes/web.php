<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/tampilanData', [MemberController::class, 'showForm'])->name('show-form');
Route::post('/submit-data', [MemberController::class, 'submitData'])->name('submit-data');

Route::get('/member', [MemberController::class, 'index'])->name('index');
Route::get('/member/{id}', [MemberController::class, 'show'])->name('show');
Route::get('/member/{id}/edit', [MemberController::class, 'edit'])->name('edit');
Route::put('/member/{id}/update', [MemberController::class, 'update'])->name('update');
Route::delete('/member/{id}/delete', [MemberController::class, 'destroy'])->name('delete');



Route::get('/', function () {
    return redirect()->route('index');
});


use App\Http\Controllers\Api\MemberApiController;

Route::get('/api/members', [MemberApiController::class, 'index']);
Route::get('/api/members/{id}', [MemberApiController::class, 'show']);
Route::post('/api/members', [MemberApiController::class, 'store']);
Route::put('/api/members/{id}', [MemberApiController::class, 'update']);
Route::delete('/api/members/{id}', [MemberApiController::class, 'destroy']);

