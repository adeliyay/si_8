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
        return view('Barang', compact('barangs'));
    }
    public function barang()
    {
        return view('input');
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
}
