<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FavouriteController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();
        $show = $request->input('show', 6);

        // Dapatkan favorit user dengan produk dan merchant
        $favorites = Favorite::where('user_id', $userId)
                             ->with('product.merchant')
                             ->paginate($show);

        // Mengubah koleksi produk dari favorit
        $products = $favorites->getCollection()->map(function ($favorite) {
            return $favorite->product;
        });

        // Membuat paginasi baru untuk produk
        $paginatedProducts = new \Illuminate\Pagination\LengthAwarePaginator(
            $products,
            $favorites->total(),
            $favorites->perPage(),
            $favorites->currentPage(),
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('User.Pages.favourite', [
            'products' => $paginatedProducts,
        ]);
    }

    public function addToWishlist(Request $request){
        $user = Auth::user();
        $product_id = $request->input('product_id');

        if (!$user) {
            Alert::info('User', 'Silahkan login terlebih dahulu');
            return redirect('/postingan');
        }

        dd($user);

        // Check if the product is already in the wishlist
        $existingFavorite = Favorite::where('user_id', $user->id)
                                    ->where('product_id', $product_id)
                                    ->first();

        if ($existingFavorite) {
            Alert::info('User', 'Produk ini sudah difavoritkan');
            return redirect('/postingan');
        }

        Favorite::create([
            'user_id' => $user->id,
            'product_id' => $product_id
        ]);

        Alert::info('User', 'Produk telah ditambahkan ke favorit');
        return redirect('/postingan');
    }

}
