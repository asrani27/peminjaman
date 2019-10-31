@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Form Tambah Barang</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" action ="/formtambahbarang/simpan">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label >Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Isi Nama Barang">
          </div>
          


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>

@endsection