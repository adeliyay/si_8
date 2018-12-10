<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\penjualan;
use App\Barang;
use App\User;

class PenjualanController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        $id = Auth::user()->id; 
        $penjualans = penjualan::all();
        $coba = $barangs->pluck('jual');
        $coba2 = $barangs->pluck('beli');
        $ids = $barangs->pluck('id');
        $id_jual = $penjualans->pluck('id_barang');
        $coba3 = $penjualans->pluck('terjual');
        $i = 0;
        for($i=0;$i<$coba->count();$i++){
            $test[$i] = $coba[$i] - $coba2[$i];
            $test2[$i] = penjualan::where('id_barang',$ids[$i])->sum('terjual');
            $result[$i] = $test[$i] * $test2[$i]; 
        }

        //$penjualans= Barang::get()->pluck('nama','id');
        // $penjualans = penjualan::with('get_Barang')->get();
        return view('penjualan.index', compact('barang','penjualans','id','result'));
    }
    public function create()
    {
        $barangs = Barang::all();
        
        return view('penjualan.create', compact('barangs'));
    }
    // public function store(Request $request)
    // {

    //     return $request;
    // }
    public function store()
    {
        // $jual = Barang::find($penjualan->id_barang)->jual;
        // dd($jual);
        penjualan::create([
            'user_id'=>Auth::id(),
            'id_barang' => request('id'),
            'nama_konsumen' => request('nama_konsumen'),
            'deskripsi_penjualan' => request('deskripsi_penjualan'),
            'terjual' => request('terjual')
        ]);
        return redirect()->route('penjualan');
    }
}
