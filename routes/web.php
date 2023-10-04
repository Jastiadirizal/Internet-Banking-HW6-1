<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::get('/index', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/index', [LoginController::class, 'authenticate'])->name('login.index');

Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [LoginController::class, 'registerPost'])->name('register')->middleware('guest');


Route::group([
    'middleware' => 'auth',
], function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
