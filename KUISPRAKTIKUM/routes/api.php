<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\Api\MemberApiController;

Route::prefix('members')->group(function () {
    Route::get('/', [MemberApiController::class, 'index']);
    Route::get('/{id}', [MemberApiController::class, 'show']);
    Route::post('/', [MemberApiController::class, 'store']);
    Route::put('/{id}', [MemberApiController::class, 'update']);
    Route::delete('/{id}', [MemberApiController::class, 'destroy']);
});

