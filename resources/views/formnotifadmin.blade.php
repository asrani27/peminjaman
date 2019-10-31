Daftar Barang Yang DiPinjam 
<table border="1">
    <tr>
        <td>Nama Pinjam</td>
        <td>Nama Barang</td>
        <td>Tanggal Dikembalikan</td>
    </tr>
    @foreach ($data as $item)
    <tr>
    <td>{{$item->peminjam->nama}}</td>
    <td>{{$item->barang->nama_barang}}</td>
    <td>{{\Carbon\Carbon::parse($item->tanggal_dikembalikan)->format('d-M-Y')}}</td>
    </tr>
        
    @endforeach
</table>