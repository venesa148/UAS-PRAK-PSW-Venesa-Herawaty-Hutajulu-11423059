<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;


class LapanganController extends Controller
{
    public function index()
    {
        $data = Lapangan::all();
        // dd($data);
        return view('lapangan', compact('data'));
    }

    public function tambahlapangan()
    {
        return view('tambahlapangan');
    }

    public function insertlapangan(Request $request)
    {
        // dd($request->all());
        Lapangan::create($request->all());
        return redirect()->route('lapangan')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampillapangan($id)
    {
        $data = Lapangan::find($id);
        // dd($data);
        return view('tampillapangan', compact('data'));
    }

    public function updatelapangan(Request $request, $id)
    {
        $data = Lapangan::find($id);
        $data->update($request->all());
        return redirect()->route('lapangan')->with('success', 'Data Berhasil Di Update');
    }

    public function deletelapangan($id)
    {
        $data = Lapangan::find($id);
        $data->delete();
        //dd($data);
        return redirect()->route('lapangan')->with('success', 'Data Berhasil Di Hapus');
    }

}
