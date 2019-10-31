<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjam;
use Alert;

class PeminjamController extends Controller
{
    public function index()
    {

        $data = Peminjam::all();
        return view('peminjam', compact('data'));
    }

    public function tambah(){
        return view('tambahpeminjam');
    }

    public function simpan(Request $req){
        $cek_nip = Peminjam::where('nip', $req->nip)->first();
        if($cek_nip == null)
        {
            $data = new Peminjam;
            $data->nip = $req->nip;
            $data->nama = $req->nama;
            $data->telpn = $req->telpn;
            $data->department = $req->department;
            $data->jabatan = $req->jabatan;
            $data->email = $req->email;
            $data->save();
            alert::success('Pesan Success','Data Berhasil di Simpan');
            return redirect('/peminjam');
        }
        else
        {
            Alert::error('Pesan Error','Nip Sudah ada ');
            return redirect('/peminjam');
        }
    }

    public function delete($id){
        $data = Peminjam::find($id)->delete();
        alert::success('Pesan Succes','Berhasil Di Hapus');
        return back();
    }

    public function edit($id){
        $data = Peminjam::find($id);
        return view('formeditpeminjam',compact('data'));
    }

    public function update(Request $req, $id){
        $data = Peminjam::find($id);
        $data->nip = $req->nip;
        $data->nama = $req->nama;
        $data->telpn = $req->telpn;
        $data->department = $req->department;
        $data->jabatan = $req->jabatan;
        $data->email = $req->email;
        $data->save();
        alert::success('Pesan Success','Data Berhasil di Update');
        return redirect('/peminjam');

    }
}
