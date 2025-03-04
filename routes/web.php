<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level',[LevelController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/user',[UserController::class,'index']);

Route::get('/user2',[UserController2::class,'index']);
Route::get('/user/tambah',[UserController2::class,'tambah']);
Route::post('/user/tambah_simpan',[UserController2::class,'tambah_simpan']);
Route::get('/user/ubah/{id}',[UserController2::class,'ubah']);
Route::post('/user/ubah_simpan/{id}',[UserController2::class,'ubah_simpan']);
Route::get('/user/hapus/{id}',[UserController2::class,'hapus']);

