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

Route::get('/wisatas', [WisataApiController::class, 'index']);
Route::post('/wisatas', [WisataApiController::class, 'store']);
Route::get('/wisatas/{id}', [WisataApiController::class, 'show']);
Route::put('/wisatas/{id}/', [WisataApiController::class, 'update']);
Route::delete('/wisatas/{id}', [WisataApiController::class, 'destroy']);
