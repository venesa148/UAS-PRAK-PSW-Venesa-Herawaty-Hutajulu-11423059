<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('home');
    }

    public function role()
    {
        return ('cantik');
    }
 
    public function kontak()
    {
        return view('kontak');
    }
    public function berita()
    {
        return view('databeritauser');
    }

    public function adminHome()
    {
        return view('dashboard');
    }
    public function pasti()
    {
        return ('orang');
    }
}
