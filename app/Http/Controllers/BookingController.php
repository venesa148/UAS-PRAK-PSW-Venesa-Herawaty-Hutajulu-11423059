<?php

namespace App\Http\Controllers;

use App\Exports\BookingExport;
use PDF;
use App\Models\Lokasi;
use App\Models\Booking;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; // Correct spelling here

class BookingController extends Controller
{
    public function index()
    {
        $data = Booking::all();
        return view('booking', compact('data'));
    }

    public function adminview()
    {
        $data = Booking::all();
        return view('abooking', compact('data'));
    }

    public function adminviewbooking()
    {
        $data = Booking::all();
        return view('adminbooking', compact('data'));
    }

    public function bdminview()
    {
        $data = Booking::all();
        return view('bbooking', compact('data'));
    }

    public function tambahdata()
    {
        $lapangan = Lapangan::all();
        $lokasi = Lokasi::all();
        return view('tambahdata', compact('lapangan', 'lokasi'));
    }

    public function insertdata(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('booking')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id)
    {
        $data = Booking::find($id);
        return view('tampildata', compact('data'));
    }

    public function admintampilkandata($id)
    {
        $data = Booking::find($id);
        return view('admintampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Booking::find($id);
        $data->update($request->all());
        return redirect()->route('booking')->with('success', 'Data Berhasil Di Update');
    }

    public function adminupdatedata(Request $request, $id)
    {
        $data = Booking::find($id);
        $data->update($request->all());
        return redirect()->route('abooking')->with('success', 'Status Berhasil Di dikirim');
    }

    public function deletebook($id)
    {
        $data = Booking::find($id);
        $data->delete();
        return redirect()->route('booking')->with('success', 'Data Berhasil Di Hapus');
    }

    public function exportpdf()
    {
        $data = Booking::all();
        view()->share('data', $data);
        $pdf = PDF::loadView('databookingpdf');
        return $pdf->download('databooking.pdf');
    }

    public function exportexcel() // Correct method name here
    {
        return Excel::download(new BookingExport, 'databookingpdf.xlsx'); // Correct spelling here
    }
}