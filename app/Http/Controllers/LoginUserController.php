<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function login_users(Request $request){
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:user,merchant' 
        ],[
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'user_type.required' => 'Tipe pengguna wajib dipilih',
            'user_type.in' => 'Tipe pengguna tidak valid'
        ]);

        $guard = $request->input('user_type');

        $check = Auth::guard($guard)->attempt($request->only(["email", "password"]));

        if ($check) {
            // Redirect based on the user type
            if ($guard == 'user') {
                return redirect('/')->with('success', 'Login berhasil!');
            } else {
                return redirect('/merchant')->with('success', 'Login berhasil!');
            }
        } else {
            return redirect('/login')
                ->withErrors(['login' => 'Username dan password yang dimasukkan tidak sesuai'])
                ->withInput();
        }
    }

    public function logout(Request $request) {
        $userType = $request->input('user_type', 'user'); // Default to 'user' if not specified

        Auth::guard($userType)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
