<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/user/{id}', function ($id) {
    return "profile user dengan ID :".$id;
});

Route::get('/produk/{slug?}', function ($slug="semua-produk") {
    return "menampilkan :".$slug;
});

Route::get('/Mahasiswa',[MahasiswaController::class,'index'] );
Route::get('/Profile',[MahasiswaController::class,'Pp'] );
Route::get('/uuu',[ProdukController::class,'index']);
Route::get('/show',[ProdukController::class,'www']);

Route::get('/koko',[ProdukController::class,'ooo']);