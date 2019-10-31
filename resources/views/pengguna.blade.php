@extends('layouts.template')

@section('content')
<a href="/formtambahpengguna" class="btn btn-sm btn-success">Tambah User</a>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar User </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>E-mail</th>
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
               <td>{{$item->name}}</td>
               <td>{{$item->email}}</td>
               <td><a href="/pengguna/edit/{{$item->id}}"  class="btn btn-sm btn-primary">EDIT</a> - 
                   <a href="/pengguna/delete/{{$item->id}}"class="btn btn-sm btn-danger">DELETE</a>
               </td>
               </tr> 
            @endforeach

        </tbody>
     
      </table>
    </div>
    <!-- /.box-body -->
  </div> 

@endsection