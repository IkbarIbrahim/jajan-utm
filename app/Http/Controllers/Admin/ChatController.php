<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::with('users')->when(request('search') ?? false, function ($query, $search) {
            return $query->where('name', 'LIKE', "%$search%");
        })  ->paginate(10)
            ; 

            $totalchats = Chat::count();
        return view('Admin.Chat.Index', [
            'chats' => $chats,
            'totalchats' => $totalchats,

        ]);
    }
}
