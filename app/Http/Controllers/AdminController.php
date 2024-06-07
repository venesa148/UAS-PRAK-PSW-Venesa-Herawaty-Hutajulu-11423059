<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }

    public function member()
    {
        $data = User::where('type', 0)->get();
        // dd($data);
        return view('member', compact('data'));
    }
    public function memberadmin()
    {
        $data = User::where('type', 0)->get();
        // dd($data);
        return view('memberadmin', compact('data'));
    }
    public function pengelola()
    {
        $data = User::where('type', 1)->get();
        // dd($data);
        return view('pengelola', compact('data'));
    }

    public function delete($id)
    {

        $data = User::find($id);
        $data->delete();
        //dd($data);
        return redirect()->route('pengelola')->with('success', 'Data Berhasil Di Hapus');
    }
    public function deletemember($id)
    {

        $data = User::find($id);
        $data->delete();
        //dd($data);
        return redirect()->route('memberadmin')->with('success', 'Data Berhasil Di Hapus');
    }
    public function deletememberinfo($id)
    {

        $data = User::find($id);
        $data->delete();
        //dd($data);
        return redirect()->route('member')->with('success', 'Data Berhasil Di Hapus');
    }
}
