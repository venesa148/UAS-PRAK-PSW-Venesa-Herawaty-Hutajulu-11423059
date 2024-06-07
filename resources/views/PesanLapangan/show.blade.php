@extends('layouts.app')

@section('content')
    <h1>Detail Pesan Lapangan</h1>
    <p>Tanggal: {{ $pesanLapangan->tanggal }}</p>
    <p>Lapangan: {{ $pesanLapangan->lapangan }}</p>
    <p>Nama Pemesan: {{ $pesanLapangan->nama_pemesan }}</p>
    <p>Waktu: {{ $pesanLapangan->waktu }}</p>
    <p>Durasi: {{ $pesanLapangan->durasi }}</p>
    <p>Status: {{ $pesanLapangan->status }}</p>
    <!-- Tambahkan tombol untuk kembali jika dibutuhkan -->
@endsection
