@extends('layouts.app')

@section('content')
    <h1>Edit Pesan Lapangan</h1>
    <form action="{{ route('pesan-lapangan.update', $pesanLapangan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $pesanLapangan->tanggal }}">
        </div>
        <div class="form-group">
            <label for="lapangan">Lapangan:</label>
            <input type="text" id="lapangan" name="lapangan" class="form-control" value="{{ $pesanLapangan->lapangan }}">
        </div>
        <div class="form-group">
            <label for="nama_pemesan">Nama Pemesan:</label>
            <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control" value="{{ $pesanLapangan->nama_pemesan }}">
        </div>
        <div class="form-group">
            <label for="waktu">Waktu:</label>
            <input type="time" id="waktu" name="waktu" class="form-control" value="{{ $pesanLapangan->waktu }}">
        </div>
        <div class="form-group">
            <label for="durasi">Durasi:</label>
            <input type="text" id="durasi" name="durasi" class="form-control" value="{{ $pesanLapangan->durasi }}">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
