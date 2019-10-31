<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Alert;
use Mail;
use App\Transaksi;
use App\Peminjam;
use App\Barang;

class NotifController extends Controller
{
    public function kirimpesan(){
        
        $today = Carbon::now();
        $barangpinjam = Transaksi::where('status','Dipinjam')->where('tanggal_dikembalikan','<',$today)->get();
        $datapeminjam = $barangpinjam->map(function($item){
            $item->email_peminjam = $item->peminjam->email;
            return $item;
        });

    foreach($datapeminjam as $data)
    {

        //ini notif kepeminjam
        Mail::send('formnotif',['data' =>$data],
        function ($message) use ($data)
        {
            $message->subject('Notofikasi Barang Yang Anda Pinjam Telah Melewati Tanggal Peminjaman');
            $message->from('lutfieriyulianto12@gmail.com');
            $message->to ($data->email_peminjam);
        });
    }

    //ini notif ke admin
    $data = $datapeminjam;
    $email_admin ='lutfieriyulianto12@gmail.com';
    Mail::send('formnotifadmin',['data' =>$data],
    function ($message) use ($email_admin)
    {
        $message->subject('Dafar Barang Yang di Pinjam');
        $message->from('lutfieriyulianto12@gmail.com');
        $message->to ($email_admin);
    });
    alert::success('Pesan succes','Notif Berhasil Disimpan');
    return back();
    }
}
