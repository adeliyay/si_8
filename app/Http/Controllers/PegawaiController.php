<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $pegawais = Pegawai::all();
        return view('pegawai.index',compact('pegawais'));
    }

    public function create(){
        return view('pegawai.create');
    }

    public function store(){
      Pegawai::create([
          'id'=>Auth::id(),
          'nama_pegawai' => request('nama_pegawai'),
          'bagian' => request('bagian'),
          'gaji_pegawai' => request('gaji_pegawai')
      ]);
      return redirect('/pegawai');
    }

    public function edit($id){
        $pegawai = Pegawai::find($id);

        return view('pegawai.edit', compact('pegawai'));
    }

    public function update($id){
        $pegawai = Pegawai::find($id);

        $pegawai->update([
          'nama_pegawai' => request('nama_pegawai'),
          'bagian' => request('bagian'),
          'gaji_pegawai' => request('gaji_pegawai')
        ]);

        return redirect('/pegawai');
    }

    public function destroy(Pegawai $pegawai){
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
