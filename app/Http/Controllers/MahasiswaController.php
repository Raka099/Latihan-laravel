<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

   public function index ()
   {
      $mahasiswa = mahasiswa::all();
      $mahasiswa = mahasiswa::paginate(10);
      return view ('mahasiswa.index', compact('mahasiswa'));
   }

   public function create ()
   {
      return view ('mahasiswa.create');
   }

   public function store (Request $request)
   {
      mahasiswa::create($request->all());
      return redirect ('/mahasiswa');
   }

   public function edit($id)
   {
    $mahasiswa = mahasiswa::find($id);

    return view('mahasiswa.edit', compact('mahasiswa'));
   }

   public function update(Request $request, $id) 
   {
      mahasiswa::find($id)->update($request->all());
      return redirect('/mahasiswa');
   }

   public function destroy ($id)
   {
      mahasiswa::destroy($id);
      return redirect('/mahasiswa');
   }
    
}