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

    <title>lokasi</title>
  </head>
  <body>
    <div class="container">
        <h1 class="test-center-mb4">CRUD lokasi</h1>
        <a href="/tambahlokasi" class="btn btn-info">Tambah Lokasi +</a>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama</th>
                    {{-- <th scope="col">Kode Lapangan #</th> --}}

                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach ($data as $row)
                <tbody>
                    <tr>
                      {{-- <th scope="row">{{$row->id}}</th> --}}
                      <th>{{ $loop->iteration }}</th>
                      <td>{{$row->nama}}</td>
                      {{-- <td>{{$row->id}}</td> --}}

                      <td>{{$row->alamat}}</td>
                      <td>
                        <a href="/deletek/{{$row->id}}" class="btn btn-danger">Hapus</a>
                        <a href="/tampilkanlokasi/{{$row->id}}" class="btn btn-info">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                @endforeach

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