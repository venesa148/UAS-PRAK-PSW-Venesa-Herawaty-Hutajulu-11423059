<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Report Lapangan</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama Lokasi</th>
    <th>Jenis Lapangan</th>
    <th>Nama Pemesan</th>
    <th>Tanggal pemesan</th>
    <th>Tanggal selesai</th>
    <th>Harga</th>
    <th>Nomor telepon</th>
    <th>Status</th>

  </tr>
  @php
      $no=1;
  @endphp
  @foreach ($data as $row)
      
  <tr>
    <td>{{$no++}}</td>
    <td>{{$row->nama}}</td>
    <td>{{$row->jenis_lapangan}}</td>
    <td>{{$row->nama_pemesan}}</td>
    <td>{{$row->tanggal_pemesanan}}</td>
    <td>{{$row->tanggal_selesai}}</td>
    <td>{{$row->harga}}</td>
    <td>{{$row->no_telp}}</td>
    <td>{{$row->aksi}}</td>

  </tr>
  @endforeach

</table>

</body>
</html>


