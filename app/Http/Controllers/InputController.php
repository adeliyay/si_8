<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;

class InputController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }
    public function barang()
    {
        return view('barang.input');
    }
    public function store()
    {
        Barang::create([
            'user_id'=>Auth::id(),
            'nama' => request('nama'),
            'distributor' => request('distributor'),
            'deskripsi' => request('deskripsi'),
            'jumlah' => request('jumlah'),
            'beli' => request('beli'),
            'jual' => request('jual')
        ]);
        return redirect('/barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }
}
