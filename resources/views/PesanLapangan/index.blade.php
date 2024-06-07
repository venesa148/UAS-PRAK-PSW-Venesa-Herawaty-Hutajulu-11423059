@extends('layouts.app')

@section('content')
    <h1>List Pesan Lapangan</h1>
    <a href="{{ route('pesan-lapangan.create') }}" class="btn btn-primary mb-3">Buat Pesan Lapangan Baru</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Lapangan</th>
                <th>Nama Pemesan</th>
                <th>Waktu</th>
                <th>Durasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanLapangans as $pesanLapangan)
                <tr>
                    <td>{{ $pesanLapangan->id }}</td>
                    <td>{{ $pesanLapangan->tanggal }}</td>
                    <td>{{ $pesanLapangan->lapangan }}</td>
                    <td>{{ $pesanLapangan->nama_pemesan }}</td>
                    <td>{{ $pesanLapangan->waktu }}</td>
                    <td>{{ $pesanLapangan->durasi }}</td>
                    <td>{{ $pesanLapangan->status }}</td>
                    <td>
                        <a href="{{ route('pesan-lapangan.show', $pesanLapangan->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('pesan-lapangan.edit', $pesanLapangan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <!-- Tambahkan tombol hapus jika dibutuhkan -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
