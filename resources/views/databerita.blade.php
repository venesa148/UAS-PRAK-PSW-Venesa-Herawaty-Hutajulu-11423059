{{-- @extends('layout.admin')
@section('content') --}}

@extends('layouts.app')
 
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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <center>
            <h1>Kelola Pengumuman</h1>

        </center>
        <a href="/tambahberita" type="button" class="btn btn-success"
            >Tambah +</a
        >
    
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/databerita" method="GET">
                <input type="search" id="inputPassword6" class="form-control" 
                name="search"
                aria-describedby="passwordHelpInline"
                placeholder="cari">
                </form>
            </div>
            <div class="col-auto">
                <a href="/exportpdf" type="button" class="btn btn-info">Export PDF +</a>
            </div>
        </div>
    
        <div class="row">
            {{-- untuk yang tidak toastr atau pop out --}}
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Tanggal Publikasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @php $no=1; @endphp @foreach ($data as $index => $row)
                   {{-- @foreach ($data as $index => $row) --}}
                   <tr>
                       <th scope="row">{{$index + $data ->firstItem()}}</th>
                       {{-- <th scope="row">#</th> --}}
                        <td>{{$row->judul}}</td>
                        <td>
                            <img
                                src="{{ asset ('fotopegawai/'.$row->foto)}}"
                                style="width: 200px; height: 150px"
                                alt=""
                            />
                        </td>
                        <td>{{$row->konten}}</td>
                        <td>{{$row->tanggal_publikasi}}</td>
                        <td>
                            <a
                                href="/tampilkandataberita/{{$row->id}}"
                                class="btn btn-info"
                                >Edit</a
                            >
                            <a
                                href="/deleteberita/{{$row->id}}"
                                class="btn btn-danger delete"
                                >Delete</a
                            >
                            {{-- <a
                                href="/delete/{{$row->id}}"
                                href="#"
                                class="btn btn-danger delete" data-id="{{$row->id}}"
                                >Delate</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --></body>
    <script>
    $('.delete').click(function(){
    var pegawaiid = $(this).attr('data-id');

    Swal.fire({
    title: "Apkah kamu Yakin?",
    text: "Kamu akan menghapus berita ini!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, Hapus!"
    }).then((result) => {
    if (result.isConfirmed) {
        window.location = "/delete/"+pegawaiid+""
        Swal.fire({
        title: "Hapus!",
        text: "File Anda Berhasil Dihapus",
        icon: "Dengan Sukses"
        });
    }
    });

    });
    </script>
    <script>
    @if (Session::has('success'))
    toastr.success("{{Session::get('success')}}");   
    @endif
    </script>

@endsection
