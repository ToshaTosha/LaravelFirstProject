<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;

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

Route::get('/create', [CreateController::class, 'index']);
Route::post('/create', [CreateController::class, 'submit']);

Route::get('/', [ShowController::class, 'index']);