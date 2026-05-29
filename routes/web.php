<?php
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

// Route::get('/Mahasiswa',[MahasiswaController::class,'index'] );
// Route::get('/Profile',[MahasiswaController::class,'Pp'] );
// Route::get('/uuu',[ProdukController::class,'index']);
// Route::get('/show',[ProdukController::class,'www']);

Route::get('/koko',[ProdukController::class,'ooo']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// add
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
// edit
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
// delete
Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);

// Route::get('/produk', [ProdukController::class,'index']);
// Route::get('/showproduk', [ProdukController::class,'show']);
// Route::get('/viewproduk', [ProdukController::class,'view']);