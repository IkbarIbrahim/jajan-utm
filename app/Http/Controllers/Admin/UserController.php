<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::when(request('search') ?? false, function ($query, $search) {
            return $query->whereAny(['first_name', 'last_name'], 'LIKE', "%$search%");
        })
            ->paginate(5)
            ->withQueryString();

        return view('Admin.Users.Index', [
            'users' => $users,
        ]);
    }

    public function destroy(User $user)
    {
        $user->favorites()->delete();
        $user->comments()->delete();
        $user->chats()->delete();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
