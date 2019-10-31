@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">form Edit Peminjam</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
    <form role="form" method="POST" action ="/formeditpeminjam/update/{{$data->id}}">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label >nip</label>
          <input type="text" class="form-control" name="nip" value="{{$data->nip}}">
          </div>
          <div class="form-group">
            <label >Nama Peminjam</label>
            <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
          </div>
          <div class="form-group">
            <label >Nomer Telfon</label>
            <input type="text" class="form-control" name="telpn" value="{{$data->telpn}}">
          </div>
          <div class="form-group">
            <label >department</label>
          <input type="text" class="form-control" name="department" value="{{$data->department}}">
          </div>
          <div class="form-group">
            <label >Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{$data->jabatan}}">
          </div>
          <div class="form-group">
            <label >email</label>
            <input type="text" class="form-control" name="email" value="{{$data->email}}">
          </div>



        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

@endsection