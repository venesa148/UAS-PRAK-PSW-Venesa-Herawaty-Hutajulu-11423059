@extends('layouts.user')
 
@section('title', 'Home')
 
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
<!doctype html>
{{-- < lang="en"> --}}
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- <title>lokasi</title>
  </head>
  <body>
    <div class="container">
        <h1 class="test-center-mb4">Jadi Member</h1>
        <a href="#" class="btn btn-info">Jadi Member +</a>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor telepon</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Bukti</th>
                  </tr>
                </thead>
                {{-- @foreach ($data as $row)
                <tbody>
                    <tr>
                      <th scope="row">{{$row->id}}</th>
                      <td>{{$row->nama}}</td>
                      <td>{{$row->alamat}}</td>
                      <td>
                        <a href="/deletek/{{$row->id}}" class="btn btn-danger">Hapus</a>
                        <a href="/tampilkanlokasi/{{$row->id}}" class="btn btn-info">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                @endforeach --}}

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
  {{-- </body> --}}
<footer class="bg-blue-500 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-gray-100">© 2024 SPORT FOR LIFE</p>
    </div>
</footer>
@endsection
