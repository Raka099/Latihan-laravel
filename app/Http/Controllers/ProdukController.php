<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        return "Ini adalah halaman produk dari controller";
    }
    public function www() {
        return "Ini Halaman show produk";
    }

    public function ooo(){
        return view('produk');
    }
}
