@extends('layouts.template')

@section('content')
<a href="/formtambahtransaksi" class="btn btn-sm btn-success">Tambah Transaksi Peminjaman</a>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar transaksi Peminjaman </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Barang</th>
          <th>jumlah</th>
          <th>tgl Pinjam</th>
          <th>tgl Dikembalikan</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            
            <?php
            $no=1;
            ?>
             @foreach ($data as $item)
               <tr>
               <td>{{$no++}}</td>
               <td>{{$item->peminjam->nama}}</td>
               <td>{{$item->barang->nama_barang}}</td>
               <td>{{$item->jumlah}}</td>
               <td>{{\Carbon\Carbon::parse($item->tanggal_pinjam)->format('d M Y')}}</td>
               <td>{{\Carbon\Carbon::parse($item->tanggal_dikembalikan)->format('d M Y')}}</td>
               <td>{{$item->status}}
                    <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="/dikembalikan/{{$item->id}}">Dikembalikan</a></li>
                              <li><a href="/dipinjam/{{$item->id}}">dipinjam</a></li>
                              
                            </ul>
                          </div>
                              
            </td>
               <td><a href="/transaksi/edit/{{$item->id}}"  class="btn btn-sm btn-primary">EDIT</a> - 
                  <a href="/transaksi/delete/{{$item->id}}"class="btn btn-sm btn-danger">DELETE</a>
               </td>
               </tr> 
            @endforeach 

        </tbody>
     
      </table>
    </div>
    <!-- /.box-body -->
  </div> 

@endsection