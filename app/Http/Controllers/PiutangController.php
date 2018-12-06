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
        return view('piutang', compact('piutangs'));
    }
    public function create()
    {
        return view('createp');
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
        return redirect('/piutang');
    }
}
