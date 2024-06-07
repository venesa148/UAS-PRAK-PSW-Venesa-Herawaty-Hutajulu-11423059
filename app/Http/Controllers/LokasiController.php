<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $data = lokasi::all();
        // dd($data);
        return view('lokasi', compact('data'));
        // return view('lokasi');
    }
    public function tambahlokasi()
    {
        return view('tambahlokasi');
    }
    public function insertlokasi(Request $request)
    {
        // dd($request->all());
        lokasi::create($request->all());
        return redirect()->route('lokasi')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampilkanlokasi($id)
    {
        $data = lokasi::find($id);
        // dd($data);
        return view('tampillokasi', compact('data'));
    }
    public function updatelokasi(Request $request, $id)
    {
        $data = lokasi::find($id);
        $data->update($request->all());
        return redirect()->route('lokasi')->with('success', 'Data Berhasil Di Update');
    }

    public function deletek($id)
    {

        $data = lokasi::find($id);
        $data->delete();
        //dd($data);
        return redirect()->route('lokasi')->with('success', 'Data Berhasil Di Hapus');
    }
}
