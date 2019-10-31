@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Form Tambah transaksi</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" action ="/formtambahtransaksi/simpan">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label>Pilih Peminjam</label>
                <select class="form-control select2" style="width: 100%;" name = 'peminjam_id'>
                  
                    @foreach ($peminjam as $item)
                <option value="{{$item->id}}">{{$item->nip}} / {{$item->nama}} </option>
                        
                    @endforeach

                </select>
              </div>

              <div class="form-group">
                <label>Pilih Barang</label>
                <select class="form-control select2" style="width: 100%;" name ='barang_id'>
                  
                    @foreach ($barang as $item)
                 <option value="{{$item->id}}"> {{$item->nama_barang}} </option>
                        
                    @endforeach

                </select>
              </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Barang</label>
            <input type="text" class="form-control" name="jumlah">
          </div>
          <!-- Date -->
          <div class="form-group">
            <label>Tanggal Pinjam</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker" name ='tanggal_pinjam' >
            </div>
            <!-- /.input group -->
          </div>
          <!-- Date -->
          <div class="form-group">
            <label>Tanggal Dikembalikan</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker2" name = 'tanggal_dikembalikan'>
            </div>
            <!-- /.input group -->
          </div>

          
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>

@endsection