<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Peminjam;
use App\Barang;
use Carbon\Carbon;
use Alert;

class TransaksiController extends Controller
{
    public function index(){
        $data = Transaksi::all();
        return view('transaksi', compact('data'));
    }

    public function tambah(){
        $peminjam = Peminjam::all();
        $barang = Barang::all();
        return view('tambahtransaksi', compact('peminjam','barang'));
    }

    public function simpan(Request $req ){
        
        $tanggal_pinjam       = Carbon::createFromFormat('d/m/Y', $req->tanggal_pinjam)->format('Y-m-d');
        $tanggal_dikembalikan = Carbon::createFromFormat('d/m/Y', $req->tanggal_dikembalikan)->format('Y-m-d');

        $data = new Transaksi;
        $data->peminjam_id          = $req->peminjam_id;
        $data->barang_id            = $req->barang_id;
        $data->jumlah               = $req->jumlah;
        $data->tanggal_pinjam       = $tanggal_pinjam;
        $data->tanggal_dikembalikan = $tanggal_dikembalikan;
        $data->status               ='Dipinjam';
        $data->save();
        alert::success('Pesan Success','Berhasil Disimpan');
        return redirect('/transaksi');
        
    }

    public function delete($id){
        $data = Transaksi::find($id)->delete();
        alert::success('Pesan Success','Berhasil Di Hapus');
        return back();
    }

    public function edit($id){
        $data = Transaksi::find($id);
        $peminjam = Peminjam::all();
        $barang = Barang::all();
        return view('formedittransaksi', compact('peminjam','barang','data'));

    }
    
    public function update(Request $req, $id ){
        
        $tanggal_pinjam       = Carbon::createFromFormat('d/m/Y', $req->tanggal_pinjam)->format('Y-m-d');
        $tanggal_dikembalikan = Carbon::createFromFormat('d/m/Y', $req->tanggal_dikembalikan)->format('Y-m-d');

        $data = Transaksi::find($id);
        $data->peminjam_id          = $req->peminjam_id;
        $data->barang_id            = $req->barang_id;
        $data->jumlah               = $req->jumlah;
        $data->tanggal_pinjam       = $tanggal_pinjam;
        $data->tanggal_dikembalikan = $tanggal_dikembalikan;
        $data->status               ='Dipinjam';
        $data->save();
        alert::success('Pesan Success','Berhasil DiUpdate');
        return redirect('/transaksi');
        
    }

    public function dikembalikan($id){
        $data = Transaksi::find($id);
        $data->status ='Dikembalikan';
        $data->save();
        alert::success('Pesan Success','Berhasil di Kembalikan');
        return back();
    }

    public function dipinjam($id){
        $data = Transaksi::find($id);
        $data->status ='Dipinjam';
        $data->save();
        alert::success('Pesan Success','Berhasil di pinjam');
        return back();
    }    
}

