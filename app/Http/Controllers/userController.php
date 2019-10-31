<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Alert;

class userController extends Controller
{
    public function index(){
        $data = User::all();
        return view("pengguna",compact('data'));

    }

    public function tambah(){
        return view("tambahpengguna");
    }

    public function simpan(Request $req){
        $data = new User;
        $data->name =$req->name;
        $data->email =$req->email;
        $data->password = bcrypt($req->password);
        $data->save();
        alert::success('Pesan Success','Data Berhasil Disimpan');
        return redirect('/pengguna');
    }

    public function delete($id){
        $user_id =auth::user()->id;
        //Cek Jika Login Tidak Bisa Di Hapus
        
        if($user_id==$id){
            alert::error('Pesan Error', 'user tidak bisa di hapus karena anda sedang login');
            return back();
        }
        else{
            $data =User::find($id)-> delete();
            alert::success('Pesan Success','Data Berhasil Di Hapus');
            return back();
        }
    }

    public function edit($id){
        $data =User::find($id);
        return view('formeditpengguna',compact('data'));
    }

    public function update(Request $req,$id){
        
    if($req->password == null)
        {
            $data =User::find($id);
            $data->name =$req->name;
            $data->email =$req->email;
            $data->save();
            alert::success('Pesan Success','Data Berhasil Di Update');
        }
    else
        {
            $data =User::find($id);
            $data->name =$req->name;
            $data->email =$req->email;
            $data->password = bcrypt ($req->pasword);
            $data->save();
            alert::success('Pesan Success','Data Berhasil Di Update');
        
        }
    return redirect('/pengguna');
    }   

}
