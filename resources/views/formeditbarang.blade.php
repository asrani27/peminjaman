@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">form Tambah Barang</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" action ="/formeditbarang/update/{{$data->id}}">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label >Nama Barang</label>
          <input type="text" class="form-control" name="nama_barang" value="{{$data->nama_barang}}">
          </div>
          


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

@endsection