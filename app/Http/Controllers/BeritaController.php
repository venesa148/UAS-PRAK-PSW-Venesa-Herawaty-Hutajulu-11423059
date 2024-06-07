<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use PDF;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function databerita(Request $request)
    {
        if ($request->has('search')) {
            $data = Berita::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Berita::paginate(5);
        }
        return view('databerita', compact('data'));
    }
    public function tambahberita()
    {
        return view('tambahdataberita');
    }
    public function insertdataberita(Request $request)
    {
        
        // Berita::create($request->all())
        //dd($request->all());
        $data = Berita::create($request->all());
        if ($request->hasFile('foto')) {
            $request->File('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('databerita')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandataberita($id)
    {
        $data = Berita::find($id);
        //dd($data);
        return view('tampildataberita', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $shop = Berita::find($id);
        $shop->judul = $request->input('judul');
        $shop->konten = $request->input('konten');
        $shop->tanggal_publikasi = $request->input('tanggal_publikasi');


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move('fotopegawai/', $filename);
            $shop->foto = $filename;
        }
        $shop->save();

        return redirect()->route('databerita')->with('success', 'Data Berhasil Di update');
    }
    public function deleteberita($id)
    {
        $data = Berita::find($id);
        $data->delete();
        //dd($data);
        return redirect()->route('databerita')->with('success', 'Data Berhasil Di Hapus');
    }

    // public function exportpdf()
    // {
    //     // return 'Aktifkan PDF yaa';
    //     // $data = Berita::all();
    //     // view()->share('data', $data);
    //     // $pdf = PDF::loadView('datapegawai-pdf');
    //     // return $pdf->download('data.pdf');
    // }


    public function beritauser(Request $request)
    {$data = Berita::all();
        return view('databeritauser',compact('data'));
    }
}
