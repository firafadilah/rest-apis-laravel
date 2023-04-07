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

Route::get('/wisatas', [WisataController::class, 'index']);
Route::get('/wisatas/create', [WisataController::class, 'create']);
Route::post('/wisatas', [WisataController::class, 'store']);
Route::get('/wisatas/{id}/edit', [WisataController::class, 'edit']);
Route::put('/wisatas/{id}/', [WisataController::class, 'update']);
Route::delete('/wisatas/{id}', [WisataController::class, 'destroy']);
