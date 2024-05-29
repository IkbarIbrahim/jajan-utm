<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MerchantController extends Controller
{
    public function index(): View
    {
        $merchants = Merchant::when(request('search') ?? false, function ($query, $search) {
            return $query->where('name', 'LIKE', "%$search%");
        })
            ->paginate(5)
            ->withQueryString();

        return view('Admin.Merchants.Index', [
            'merchants' => $merchants,
        ]);
    }

    public function destroy(Merchant $merchant)
    {
        $products = $merchant->products();

        Favorite::destroy($products->pluck('id'));
        Comment::destroy($products->pluck('id'));
        $products->delete();
        $merchant->delete();

        return redirect()->route('admin.merchants.index');
    }
}
