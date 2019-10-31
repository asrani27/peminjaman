@extends('layouts.template')

@section('content')

<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{$jumlah_user}}</h3>

        <p>Jumlah Pengguna</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
      <a href="/pengguna" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{$jumlah_peminjam}}</h3>

        <p>Data Peminjam</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="/peminjam"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
      <h3>{{$jumlah_barang}}</h3>

        <p>Data Barang</p>
      </div>
      <div class="icon">
        <i class="ion ion-cube"></i>
      </div>
      <a href="/barang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
      <h3>{{$jumlah_transaksi}}</h3>

        <p>Transaksi Peminjam</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="/peminjam" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<a href="/kirimnotif" class="btn btn-block btn-success btn-lg">Kirim Notifikasi</a>
\@endsection