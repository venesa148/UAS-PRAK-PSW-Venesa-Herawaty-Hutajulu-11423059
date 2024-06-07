<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function pengumuman()
    {

        return view('pengumuman');
    }
}

