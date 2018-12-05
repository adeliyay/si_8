<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
    public function jual()
    {
        return view('penjualan');
    }
   
    public function piutang()
    {
        return view('piutang');
    }
    public function op()
    {
        return view('operasional');
    }
    public function home()
    {
        return view('home');
    }
}
