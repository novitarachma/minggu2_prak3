<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Praktikum3Controller;
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

Route::get('/', [Praktikum3Controller::class,'index']);
Route::get('/home', [Praktikum3Controller::class,'home']);
Route::prefix('category')->group (function() {
    Route::get('/prodi/{macam}', [Praktikum3Controller::class,'prodi']);
});
Route::get('/news/{id}', [Praktikum3Controller::class,'news']);
Route::prefix('category')->group (function() {
    Route::get('/sarana/{ruangan}', [Praktikum3Controller::class,'sarana']);
});
Route::get('/about', [Praktikum3Controller::class,'about']);
Route::get('/comment/{nama}/{pesan}', [Praktikum3Controller::class,'comment']);