@extends('layouts.template')

@section('content')
<a href="/formtambahpeminjam" class="btn btn-sm btn-success">Tambah Peminjam</a>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Peminjam </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>nip</th>
          <th>Nama</th>
          <th>telpn</th>
          <th>department</th>
          <th>jabatan</th>
          <th>email</th>
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
               <td>{{$item->nip}}</td>
               <td>{{$item->nama}}</td>
               <td>{{$item->telpn}}</td>
               <td>{{$item->department}}</td>
               <td>{{$item->jabatan}}</td>
               <td>{{$item->email}}</td>
               <td><a href="/peminjam/edit/{{$item->id}}"  class="btn btn-sm btn-primary">EDIT</a> - 
                  <a href="/peminjam/delete/{{$item->id}}"class="btn btn-sm btn-danger">DELETE</a>
               </td>
               </tr> 
            @endforeach 

        </tbody>
     
      </table>
    </div>
    <!-- /.box-body -->
  </div> 

@endsection