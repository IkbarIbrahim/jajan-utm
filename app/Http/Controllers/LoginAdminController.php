<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('Auth.Login-admin');
    }

    public function login_admin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        
        $ceck = Auth::guard("admin")->attempt($request->only(["email", "password"]));
        
        if ($ceck) {
            return redirect('/admin')->with('success', 'Login berhasil!');
        } else {
            return redirect('/login-admin')
                ->withErrors(['login-admin' => 'Username dan password yang dimasukkan tidak sesuai'])
                ->withInput();
        }
    }
}
