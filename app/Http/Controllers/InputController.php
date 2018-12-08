<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\User;

class InputController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $barangs = Barang::all();
        return view('barang.index', compact('barangs','id'));
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
    public function update($id)
    {
        $barang = Barang::find($id);
        $barang->update([
            'nama' => request('nama'),
            'distributor' => request('distributor'),
            'deskripsi' => request('deskripsi'),
            'jumlah' => request('jumlah'),
            'beli' => request('beli'),
            'jual' => request('jual')
        ]);
        return redirect()->route('barang.index');
    }
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
