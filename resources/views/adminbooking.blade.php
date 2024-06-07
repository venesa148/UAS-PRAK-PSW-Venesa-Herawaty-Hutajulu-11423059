@extends('layouts.admin')
 
@section('title', 'Profile Settings')
 
@section('contents')


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Booking</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Booking Pemesanan Pelanggan</h1>

    <div class="container">
        
            <a href="exportpdf" class="btn btn-info">Export PDF </a>
            {{-- <a href="exportexel" class="btn btn-success">Export exel </a> --}}
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$message}}
          </div>
          @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama Lokasi</th>
                    <th scope="col">Jenis lapangan</th>
                    <th scope="col">Tanggal pemesanan</th>
                    <th scope="col">Tanggal selesai</th>
                    <th scope="col">Nama pemesan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">No.telp</th>
                    {{-- <th scope="col">Aksi</th> --}}
                    {{-- <th scope="col">Edit Approved</th> --}}
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $data as $row)
                  <tr>

                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->jenis_lapangan}}</td>
                    <td>{{$row->tanggal_pemesanan}}</td>
                    <td>{{$row->tanggal_selesai}}</td>
                    <td>{{$row->nama_pemesan}}</td>
                    <td>{{$row->harga}}</td>
                    <td>{{$row->no_telp}}</td>
                    {{-- <td>
                        <a href="/delete/{{$row->id}}" class="btn btn-danger">Batalkan Pemesanan</a>
                        <a href="/tampilkandata/{{$row->id}}" class="btn btn-success">Aksi/Edit</a>
                    </td> --}}
                    {{-- <td>
                      <a href="/admintampilkandata/{{$row->id}}" class="btn btn-warning">Aksi Konfirmasi</a>
                  </td> --}}
                    <td>{{$row->aksi}}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection