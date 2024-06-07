@extends('layouts.admin')

@section('title', 'Create Court')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Add Court</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin/court/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @foreach ($data as $row)
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nama Lokasi</label>
                <select class="form-select" 
                name="jenis_lapangan"
                aria-label="Default select example">
                  <option selected>Pilih jenis lapangan</option>
                  <option >{{$row->nama}}</option>
                </select>
            </div>
            @endforeach --}}

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nama Lokasi</label>
                <select class="form-select block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                name="nama"
                aria-label="Default select example">
                  <option selected>Pilih Nama Lokasi</option>
                  @foreach($lokasi as $row)
                  <option value="{{$row->nama}}">{{$row->nama}}</option>
                  @endforeach
                </select>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Jenis Lapangan</label>

                <select class="form-select block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                name="title"
                aria-label="Default select example">
                  <option selected>Pilih jenis lapangan</option>
                  @foreach($lapangan as $row)
                  <option value="{{$row->nama}}">{{$row->nama}}</option>
                  @endforeach
                </select>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                <div class="mt-2">
                    <input id="price" name="price" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            {{-- <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Court Code</label>
                <div class="mt-2">
                    <input id="court_code" name="court_code" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div> --}}
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <textarea name="description" placeholder="Description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Pengelola</label>

                <select class="form-select block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                name="pengelola"
                aria-label="Default select example">
                  <option selected>Pilih pengelola</option>
                  @foreach($user as $row)
                  <option value="{{$row->name}}">{{$row->name}}</option>
                  @endforeach
                </select>
            </div>
            <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </form>
    </div>
</div>
@endsection
