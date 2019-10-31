@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Form Tambah Peminjam</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" action ="/formtambahpeminjam/simpan">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label >nip</label>
            <input type="text" class="form-control" name="nip" placeholder="Isi Nip Peminjam">
          </div>
          <div class="form-group">
            <label >Nama Peminjam</label>
            <input type="text" class="form-control" name="nama" placeholder="Isi Nama Peminjam">
          </div>
          <div class="form-group">
            <label >Nomer Telfon</label>
            <input type="text" class="form-control" name="telpn" placeholder="Isi Nomer Telpon">
          </div>
          <div class="form-group">
            <label >Department</label>
            <input type="text" class="form-control" name="department" placeholder="Isi Department">
          </div>
          <div class="form-group">
            <label >Jabatan</label>
            <input type="text" class="form-control" name="jabatan" placeholder="Isi Jabatan">
          </div>
          <div class="form-group">
            <label >email</label>
            <input type="text" class="form-control" name="email" placeholder="Isi email">
          </div>


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>

@endsection