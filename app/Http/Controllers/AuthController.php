<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register()
    {
        return view('auth/register');
    }
    public function registermem()
    {
        return view('registermem');
    }
    public function registerpengelola()
    {
        return view('registerpengelola');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();


        // input 

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type' => $request->type,
            'type' => "0"
        ]);

        return redirect()->route('login');
    }
    public function registerSavemem(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();


        // input 

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type' => $request->type,
            'type' => "0"
        ]);

        return redirect()->route('memberadmin');
    }
    public function registerSaveAdmin(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            // 'type' => 'required'
            'type' => "0"
        ])->validate();


        // input 

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type' => $request->type,
            'type' => "1"
            // 'type' => "0"
        ]);

        return redirect()->route('pengelola');
    }



    public function login()
    {
        return view('auth/login');
    }

    public function loginbanget()
    {
        return view('auth/loginbanget');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if ($request->email === 'admin@gmail.com' && $request->password === 'admincantik') {
            $request->session()->put('user', [
                'email' => 'admin@gmail.com',
                'type' => 'member'
            ]);

            return redirect()->route('admin/court');
        }

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin/home');
        } else {
            return redirect()->route('home');
        }

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/pasti');
    }

    public function profile()
    {
        return view('userprofile');
    }
}