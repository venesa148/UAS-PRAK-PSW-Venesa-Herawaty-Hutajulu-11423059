<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Models\PesanLapangan;
use Illuminate\Http\Request;

class PesanLapanganController extends Controller
{
    // Menampilkan semua pesan lapangan
    public function index()
    {
        $pesanLapangan = PesanLapangan::all();
        return view('PesanLapangan.index', compact('pesanLapangan'));
    }

    // Menampilkan form untuk membuat pesan lapangan baru
    public function create()
    {
        $lapangan = Court::all();
        return view('PesanLapangan.create', compact('lapangan'));
    }

    // Menyimpan pesan lapangan baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'lapangan_id' => 'required|exists:kategori_lapangan,id_katlapangan',
            'nama_pemesan' => 'required|string',
            'waktu' => 'required|date_format:H:i',
            'durasi' => 'required|integer|min:1',
            'status' => 'required|in:approve,pending,reject',
        ]);

        PesanLapangan::create($request->all());

        return redirect()->route('PesanLapangan.index')->with('success', 'Pesan lapangan berhasil dibuat.');
    }

    // Menampilkan detail pesan lapangan
    public function show($id)
    {
        $pesanLapangan = PesanLapangan::findOrFail($id);
        return view('PesanLapangan.show', compact('pesanLapangan'));
    }

    // Menampilkan form untuk mengedit pesan lapangan
    public function edit($id)
    {
        $pesanLapangan = PesanLapangan::findOrFail($id);
        $lapangan = Court::all();
        return view('PesanLapangan.edit', compact('pesanLapangan', 'lapangan'));
    }

    // Menyimpan perubahan pada pesan lapangan
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'lapangan_id' => 'required|exists:kategori_lapangan,id_katlapangan',
            'nama_pemesan' => 'required|string',
            'waktu' => 'required|date_format:H:i',
            'durasi' => 'required|integer|min:1',
            'status' => 'required|in:approve,pending,reject',
        ]);

        $pesanLapangan = PesanLapangan::findOrFail($id);
        $pesanLapangan->update($request->all());

        return redirect()->route('PesanLapangan.index')->with('success', 'Pesan lapangan berhasil diperbarui.');
    }

    // Menghapus pesan lapangan
    public function destroy($id)
    {
        $pesanLapangan = PesanLapangan::findOrFail($id);
        $pesanLapangan->delete();

        return redirect()->route('PesanLapangan.index')->with('success', 'Pesan lapangan berhasil dihapus.');
    }
}