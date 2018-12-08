<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\piutang;

class PiutangController extends Controller
{
    public function index()
    {
        $piutangs = piutang::all();
        return view('piutang.index', compact('piutangs'));
    }
    public function create()
    {
        return view('piutang.create');
    }
    public function store()
    {
        piutang::create([
            'user_id'=>Auth::id(),
            'asal_piutang' => request('asal_piutang'),
            'jatuh_tempo' => request('jatuh_tempo'),
            'deskripsi_piutang' => request('deskripsi_piutang'),
            'jumlah_piutang' => request('jumlah_piutang')
        ]);
        return redirect()->route('piutang');
    }
    public function edit($id){
        $Piutang = piutang::find($id);
        return view('piutang.edit', compact('Piutang'));
    }
    public function update($id)
    {
        $Piutang = piutang::find($id);
        $Piutang->update([
            'asal_piutang' => request('asal_piutang'),
            'jatuh_tempo' => request('jatuh_tempo'),
            'deskripsi_piutang' => request('deskripsi_piutang'),
            'jumlah_piutang' => request('jumlah_piutang')
        ]);
        return redirect()->route('piutang');
    }
    public function destroy($id)
    {
        $Piutang = piutang::find($id);
        $Piutang->delete();
        return redirect()->route('piutang');
    }
}
