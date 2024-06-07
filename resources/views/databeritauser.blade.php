{{-- @extends('layout.admin')
@section('content') --}}

@extends('layouts.user')
 
@section('title', 'Profile Settings')
 
@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Pengumuman <i>Sport For Life </i> Disini
        </h1>
    </div>
</header>
<hr />
<main>
    <br>
    {{-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            {{-- <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 relative">
            </div> --}}
        {{-- </div>
    </div> --}}
</main>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        fieldset {
            border-width: 2px; 
            border-style: solid; 
            border-color: #000; 
            padding: 10px; 
        }
    </style>
  </head>
  <body>
    <fieldset>
        <center>
            <h3>Pengumuman Sport For Life</h3>
        </center>
        <div class="container">
            {{-- <a href="/tambahberita" type="button" class="btn btn-success"
                >Tambah +</a
            > --}}
        
            <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                    <form action="/databerita" method="GET">
                    <input type="search" id="inputPassword6" class="form-control" 
                    name="search"
                    aria-describedby="passwordHelpInline"
                    placeholder="cari">
                    </form>
                </div>
                {{-- <div class="col-auto">
                    <a href="/exportpdf" type="button" class="btn btn-info">Export PDF +</a>
                </div> --}}
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
                            {{-- <th scope="col">No</th> --}}
                            <th scope="col">Judul</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Konten</th>
                            <th scope="col">Tanggal Publikasi</th>
                            {{-- <th scope="col">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                       {{-- @php $no=1; @endphp @foreach ($data as $index => $row) --}}
                       @foreach ($data as $index => $row)
                       <tr>
                           {{-- <th scope="row">{{$index + $data ->firstItem()}}</th> --}}
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
                            {{-- <td>
                                <a
                                    href="/tampilkandataberita/{{$row->id}}"
                                    class="btn btn-info"
                                    >Edit</a
                                >
                                <a
                                    href="/deleteberita/{{$row->id}}"
                                    class="btn btn-danger delete"
                                    >Delete</a
                                > --}}
                                {{-- <a
                                    href="/delete/{{$row->id}}"
                                    href="#"
                                    class="btn btn-danger delete" data-id="{{$row->id}}"
                                    >Delate</a> --}}
                            {{-- </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
    </fieldset>

</div>
<br>
<br>
<h1>Manfaat Olahraga untuk Kesehatan Tubuh</h1>
<br>
<h4>1.	Menjauhkan dari Beragam Penyakit</h4>
<p>Berolahraga secara rutin dapat meningkatkan daya tahan tubuh sehingga tubuh tidak mudah terserang penyakit. Saat berolahraga, tubuh akan lebih bebas bergerak. Hal ini akan memicu proses metabolisme dan sirkulasi darah menjadi lebih lancar. Hasilnya tubuh lebih sehat dan kuat, serta enggak mudah terserang penyakit.</p>
<h4>2.	Membuat Tubuh Lebih Tegap</h4>
<p>Berolahraga membuat semua bagian tubuh bergerak, sehingga bisa meningkatkan fleksibilitas. Otot tubuh juga menjadi lebih elastis dan tidak kaku.
  Bagi anak-anak, olahraga amat penting untuk menunjang perkembangan postur tubuhnya. Menurut Kathleen, anak yang rutin berolahraga sejak kecil akan memiliki postur tubuh yang tegap dan tidak membungkuk saat berjalan
  </p>
<h4>4.	Membantu Menjaga Kesehatan Kulit</h4>
<p>Kesehatan kulit bisa dipengaruhi oleh jumlah stres oksidatif dalam tubuh. Stres oksidatif terjadi ketika pertahanan antioksidan tubuh tidak bisa sepenuhnya memperbaiki kerusakan yang disebabkan oleh radikal bebas pada sel. Hal ini bisa merusak struktur internal dan merusak kulit kamu. Dengan melakukan olahraga secara teratur, produksi antioksidan alami dalam tubuh akan meningkat yang dapat membantu melindungi sel. Selain itu, olahraga juga bisa menstimulasi aliran darah dan menginduksi adaptasi sel kulit yang bisa membantu menunda penuaan kulit</p>
<section>
    <p>Website "Sport for Life" adalah platform yang sangat bagus untuk eksplorasi olahraga. Di sini, Anda dapat bergabung dan mendaftar dengan kami sebagai member dan dapatkan fasilitas terbaik.elamat melakukan eksplorasi lebih dalam dengan situs ini.</p>
    <br>
    <br>
    <h4>Instagram : Sport for life</h4>
    <br>
    <h4>email: sport@gmail.com</h4>
</section>
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
    <footer class="bg-blue-500 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-100">© 2024 SPORT FOR LIFE</p>
        </div>
    </footer>

@endsection
