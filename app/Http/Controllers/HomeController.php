<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $featured=Product::with('merchant')->where('status','tersedia')->orderBy('id','DESC')->limit(6)->get();
        $new_merchant=Merchant::limit(4)->orderBy('id','DESC')->get();

        return view('Homepage')
                ->with('featured',$featured)
                ->with('new_merchant',$new_merchant);
          
    }   

    public function productDetail($slug){
        $product_detail = Product::getProductById($slug);
        return view('Pages.Postingan-desc')->with('product_detail',$product_detail);
    }

    public function productGrids(Request $request)
    {
        $products = Product::query();

        // Filter by merchant type
        if ($request->filled('merchant')) {
            $merchants = $request->input('merchant');
            $products->whereHas('merchant', function ($query) use ($merchants) {
                $query->whereIn('type', $merchants);
            });
        }

        // Filter by price range
        if ($request->filled(['min', 'max'])) {
            $min = $request->input('min');
            $max = $request->input('max');
            $products->whereBetween('price', [$min, $max]);
        }

        // Search logic
        if ($request->filled('search')) {
            $search = $request->input('search');
            $products->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%');
            });
        }

        // Category filter logic
        if ($request->filled('category')) {
            $categories = $request->input('category');
            $products->whereIn('category', $categories);
        }

        // Sorting logic
        if ($request->filled('sort')) {
            $sort = $request->input('sort');
            if ($sort == 'terbaru') {
                $products->orderBy('id', 'desc');
            } elseif ($sort == 'terlama') {
                $products->orderBy('id', 'asc');
            }
        }

        // Pagination
        $show = $request->input('show', 6);
        $products = $products->with('merchant')->paginate($show);

        return view('Pages.postingan')->with('products', $products);
    }
}
