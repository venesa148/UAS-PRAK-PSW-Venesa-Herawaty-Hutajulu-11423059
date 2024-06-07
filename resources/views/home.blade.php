@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            <i>Sport For Life </i>, Tempat terbaik mengeksplorasi bakat olahraga Anda
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 relative">
                <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                {{-- <div class="absolute inset-x-0 bottom-0 bg-white bg-opacity-75 px-4 py-2">
                    <h1 class="text-3xl font-bold text-gray-900 text-center">
                        IT DEL SPORT, Tempat terbaik mengeksplorasi bakat olahraga Anda
                    </h1>
                </div> --}}
            </div>
        </div>
    </div>
</main>
<section>
    <p>Website "Sport for Life" adalah platform yang sangat bagus untuk eksplorasi olahraga. Di sini, pengguna dapat menemukan informasi lapangan yang diinginkan. Dengan desain yang sederhana dan mudah digunakan, "Sport for Life" menyediakan informasi yang bermanfaat bagi semua orang, mulai dari para member dan player yang ada. Selamat melakukan eksplorasi lebih dalam dengan situs ini.</p>
</section>
<footer class="bg-blue-500 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-gray-100">© 2024 SPORT FOR LIFE</p>
    </div>
</footer>
@endsection
