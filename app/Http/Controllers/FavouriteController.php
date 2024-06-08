<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function index(){
        $fav = Favorite::all();

        
    }
}
