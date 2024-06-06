<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterUserController extends Controller
{
    public function index(){
        return view('Auth.register-form.form-user');
    }

    public function register_user(Request $request)
    {
        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'first-name.required' => 'nama awal wajib diisi',
            'last-name.required' => 'nama akhir wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            Alert::info('User', 'Email anda sudah terdaftar');
            return redirect()->back()->withInput();
        }

        // Create new user
        $user = new User();
        $user->first_name = $request->input('first-name');
        $user->last_name = $request->input('last-name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Redirect ke halaman tertentu setelah berhasil menyimpan data
        Alert::info('User', 'Anda telah registrasi');
        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    }
}
