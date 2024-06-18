<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('User.Index', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'photo' => 'nullable|image|max:2048',
        ]);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/photos');
            $user->photo = basename($path);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',

        ]);

        $user = Auth::guard('user')->user();

        if (!Hash::check($request->old_password, $user->password)) {
            Alert::error('Password lama salah');
            return back()->withErrors(['old_password' => 'Password lama salah']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();
        Alert::success('Password berhasil diubah');
        return back()->with('status', 'Password berhasil diubah');
    }
}
