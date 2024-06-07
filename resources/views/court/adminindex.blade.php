@extends('layouts.app')

@section('title', 'Home Court List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Court List</h1>
    {{-- <a href="{{ route('admin/court/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Court</a> --}}
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nama Lokasi</th>
                <th scope="col" class="px-6 py-3">Jenis lapangan</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                {{-- <th scope="col" class="px-6 py-3">Kode lapangan</th> --}}
                <th scope="col" class="px-6 py-3">Deskripsi</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($courts->count() > 0)
            @foreach($courts as $court)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $court->nama }}
                </td>
                <td>
                    {{ $court->title }}
                </td>
                <td>
                    {{ $court->price }}
                </td>
                {{-- <td>
                    {{ $court->court_code }}
                </td> --}}
                <td>
                    {{ $court->description }}
                </td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <form action="{{ route('admin/court/destroy', $court->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>

                        {{-- <a href="{{ route('admin/court/show', $court->id) }}" class="text-blue-800">Detail</a> | --}}

                        {{-- <a href="{{ route('admin/court/edit', $court->id)}}" class="text-green-800 pl-2">Kelola</a> | --}}
                  
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Court not found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
