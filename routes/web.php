<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MahasiswaController;
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