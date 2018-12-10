<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\User;
use App\revenue;

class InputController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $barangs = Barang::all();
        $coba = $barangs->pluck('jual');
        $coba2 = $barangs->pluck('beli');
        $i = 0;
        for($i=0;$i<$coba->count();$i++){
            $test[$i] = $coba[$i] - $coba2[$i];
        }
        return view('barang.index', compact('barangs','id','test'));
    }
    // public function index() {
    //     $barangs = Barang::all();
      
    //     foreach($barangs as $barang) {
    //           $barang->keuntungan = $barang->jual - $barang->beli;
    //       }
    //     }
    // public function nama()
    // {
    //     $data= Barang::get()->pluck('nama','id');
    //     return view('barang.index',compact('data'));
    // }
    public function barang()
    {
        return view('barang.input');
    }
    // public function store(Request $request)
    // {
    //     $barang = new Profile();
    //     $barang->nama = $request->get('nama');
    //     $barang->distributor = $request->get('distributor');
    //     $barang->deskripsi = $request->get('deskripsi');
    //     $barang->jumlah = $request->get('jumlah');
    //     $barang->beli = $request->get('beli');
    //     $barang->jual = $request->get('jual');
    //     $barang->keuntungan;
    //     $barang->save();
    //     return back()->with('success', 'Your profile has been updated.');
    // }
    // public function keuntungan($id)
    // {
    //     $barang = Barang::find($id);
    //     $barang = DB::table('revenue')->select('','beli')->where('id','=',$id);
    //     return $barang->jual-$barang->beli;
    // }
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
