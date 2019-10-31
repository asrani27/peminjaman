<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Alert;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('Barang',compact('data'));
    }

    public function tambah(){
        return view('tambahbarang');
    }
    
    public function simpan(Request $req){
            $data = new Barang;
            $data->nama_barang = $req->nama_barang;
            $data->save();
            alert::success('Pesan Success','Data Berhasil di Simpan');
            return redirect('/barang');
        }

    public function delete($id){
        $data = Barang::find($id)->delete();
        Alert::success('Pesan Success','Data Berhasil Di Hapus');
        return back();
    }
    public function update(Request $req,$id){
        $data = Barang::find($id);
        $data->nama_barang = $req->nama_barang;
        $data->save();
        Alert::success('Pesan Success','Data Berhasil Di update');
        return redirect('/barang');
    }

    public function edit($id){
        $data = Barang::find($id);
        return view('formeditbarang',compact('data'));
    }
}
