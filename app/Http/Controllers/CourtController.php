<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Court;
use App\Models\lokasi;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    public function index()
    {
        $courts = Court::all();
        $user = User::where('type', 1)->get();
        return view('court.index', compact('courts','user'));
    }
    public function indexadmin()
    {
        $courts = Court::all();
        return view('court.adminindex', compact('courts'));
    }
    public function userindex()
    {
        $courts = Court::all();
        return view('court.userindex', compact('courts'));
    }

    public function create()
    {
        $lokasi = lokasi::all();
        $lapangan = Lapangan::all();
        $user = User::where('type', 1)->get();

        return view('court.create', compact('lokasi', 'lapangan','user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'title' => 'required',
            'price' => 'required',
            // 'court_code' => 'required|unique:courts',
            'description' => 'required',
            // 'pengelola' => 'required',
        ]);

        Court::create($request->all());

        return redirect()->route('admin/court')->with('success', 'Court created successfully.');
    }

    public function show($id)
    {
        $court = Court::findOrFail($id);
        return view('court.show', compact('court'));
    }

    public function edit($id)
    {
        $court = Court::findOrFail($id);
        $lokasi = lokasi::all();
        $lapangan = Lapangan::all();
        $user = User::where('type', 1)->get();
        return view('court.edit', compact('court', 'lokasi', 'lapangan', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            // 'court_code' => 'required|unique:courts,court_code,' . $id,
            'description' => 'required',
        ]);

        $court = Court::findOrFail($id);
        $court->update($request->all());

        return redirect()->route('admin/court')->with('success', 'Court updated successfully.');
    }

    public function destroy($id)
    {
        $court = Court::findOrFail($id);
        $court->delete();

        return redirect()->route('admin/court')->with('success', 'Court deleted successfully.');
    }
}