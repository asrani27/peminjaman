<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Peminjam;
use App\Barang;
use App\Transaksi;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_user = count(User::all());
        $jumlah_peminjam = count(Peminjam::all());
        $jumlah_barang = count(Barang::all());
        $jumlah_transaksi = count(Transaksi::all());

        return view('dashboard', compact('jumlah_user','jumlah_peminjam','jumlah_barang','jumlah_transaksi'));
    }
}
