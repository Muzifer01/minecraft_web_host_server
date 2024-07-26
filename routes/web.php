<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class,'index']);
Route::post('/index', [IndexController::class, 'store'])->name('index');
Route::post('/iniciar_servidor', [IndexController::class, 'submit'])->name('iniciar_servidor');

Route::get('/login', [IndexController::class,'create']);
