<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMerchantController extends Controller
{
    public function index(){
        return view('Auth.Register');
    }

    public function login_merchants(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);


        $ceck = Auth::guard("merchant")->attempt($request->only(["email", "password"]));
        
        if ($ceck) {
            return redirect('/merchant')->with('success', 'Login berhasil!');
        } else {
            return redirect('/submit-form')
                ->withErrors(['login' => 'Username dan password yang dimasukkan tidak sesuai'])
                ->withInput();
        }
    }
}
