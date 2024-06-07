@extends('layouts.app')
 
@section('title', 'Profile Settings')
 
@section('contents')

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        <title>Booking</title>
    </head>
    <body>
        <h1 class="text-center mb-4">Admin Edit Pemesanan</h1>

        <div class="container">
            {{-- <button type="button" class="btn btn-success">
                Pesan Lapangan +
            </button> --}}
            <div class="row">
              @if ($message = Session::get('success'))
              <div class="alert alert-success" role="alert">
                {{$message}}
              </div>
                  
              @endif
                <div class="card">
                    <div class="card-body">
                        <form action="/adminupdatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            {{-- <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Jenis lapangan</label
                                >
                                <select class="form-select" 
                                name="jenis_lapangan"
                                aria-label="Default select example">
                                  <option selected>{{$data->jenis_lapangan}}</option>
                                  <option value="Lapangan Futsal">Lapangan Futsal</option>
                                  <option value="Lapangan Volly">Lapangan Volly</option>
                                  <option value="Lapangan Basket">Lapangan Basket</option>
                                  <option value="Lapangan Tenis Mejz">Lapangan Tenis Mejz</option>
                                  <option value="Lapangan Bulutangkis">Lapangan Bulutangkis</option>
                                  <option value="Lapangan Hijau">Lapangan Hijau</option>
                                  <option value="Lapangan Napitupulu">Lapangan Napitupulu</option>
                                </select>
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Tanggal Pemesanan</label
                                >
                                <input
                                    type="datetime-local"
                                    name="tanggal_pemesanan"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    value="{{$data->tanggal_pemesanan}}"
                                />
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Tanggal Selesai</label
                                >
                                <input
                                    type="datetime-local"
                                    name="tanggal_selesai"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    value="{{$data->tanggal_selesai}}"
                                    

                                />
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Nama pemesan</label --}}
                                {{-- >
                                <input
                                    type="text"
                                    name="nama_pemesan"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    value="{{$data->nama_pemesan}}"
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >No telp</label
                                > --}}
                                {{-- <input
                                    type="number"
                                    name="no_telp"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    value="{{$data->no_telp}}"
                                />
                            </div> --}}
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Harga</label
                                >
                                <select class="form-select" 
                                name="harga"
                                aria-label="Default select example">
                                <option selected>{{$data->harga}}</option>
                                <option value="55.000">55.000</option>
                                <option value="110.000">110.000</option>
                                <option value="165.000">165.000</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Aksi</label
                                >
                                <select class="form-select" 
                                name="aksi"
                                aria-label="Default select example">
                                  <option selected>{{$data->aksi}}</option>
                                  <option value="Approved">Approved</option>
                                  <option value="Disapproved">Disapproved</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --></body>

</html>

@endsection
