<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataApiController;

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

Route::get('/products', [WisataApiController::class, 'index']);
Route::post('/products', [WisataApiController::class, 'store']);
Route::get('/products/{id}', [WisataApiController::class, 'show']);
Route::put('/products/{id}/', [WisataApiController::class, 'update']);
Route::delete('/products/{id}', [WisataApiController::class, 'destroy']);
