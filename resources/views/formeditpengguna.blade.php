@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Form Tambah Pengguna</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
    <form role="form" method="POST" action ="/formeditpengguna/update/{{$data->id}}">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Pengguna</label>
          <input type="text" class="form-control" name="name" value="{{$data->name}}" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" value="{{$data->email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" >
          </div>
          Catatan kosongkan pasword jika tidak ingin mengganti password


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

@endsection