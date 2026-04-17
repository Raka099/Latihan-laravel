<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index ()
    {
        return "ini halaman data mahasiswa";
    }

    public function Pp()
    {
        return "Ini profile mahasiswa";
    }
}
