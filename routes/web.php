<?php

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MembreController::class, 'index']);
Route::get('/create', [MembreController::class, 'create']);
Route::post('/store-membre', [MembreController::class, 'store']);
Route::get('/show-membre/{id}', [MembreController::class, 'show']);
Route::get('/edit-membre/{id}', [MembreController::class, 'edit']);
Route::put('/update-membre/{id}', [MembreController::class, 'update']);
Route::delete('/delete-membre/{id}', [MembreController::class, 'destroy']);
Route::delete('/destroy-all', [MembreController::class, 'destroyALL']);


