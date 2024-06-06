<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginUserController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function login_users(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);


        $ceck = Auth::guard("user")->attempt($request->only(["email", "password"]));
        
        if ($ceck) {
            Alert::success('Success ', 'Berhasil Login');
            return redirect('/')->with('success', 'Login berhasil!');
        } else {
            return redirect('/login')
                ->withErrors(['login' => 'Username dan password yang dimasukkan tidak sesuai'])
                ->withInput();
        }
    }

    public function logout(Request $request) {
        Auth::guard('user')->logout();
        
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        Alert::info('User', 'Anda telah di logout');

        return redirect('/');
    }
}
