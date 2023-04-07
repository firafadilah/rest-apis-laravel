<?php

use Illuminate\Support\Facades\Route;;

use App\Http\Controllers\WisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/products', [WisataController::class, 'index']);
Route::get('/products/create', [WisataController::class, 'create']);
Route::post('/products', [WisataController::class, 'store']);
Route::get('/products/{id}/edit', [WisataController::class, 'edit']);
Route::put('/products/{id}/', [WisataController::class, 'update']);
Route::delete('/products/{id}', [WisataController::class, 'destroy']);
