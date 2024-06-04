<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user')
            ->when(request('search'), function ($query, $search) {
                return $query->where('body', 'LIKE', "%$search%");
            })
            ->paginate(10);

        $totalComments = Comment::count();

        return view('Admin.Komentar.Index', [
            'comments' => $comments,
            'totalComments' => $totalComments,
        ]);
    }
}
