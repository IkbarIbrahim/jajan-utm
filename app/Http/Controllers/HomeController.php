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

    public function productDetail($slug)
    {
        $product_detail = Product::getProductBySlug($slug);
        if (!$product_detail) {
            abort(404, 'Product not found');
        }
        $averageRating = $product_detail->average_rating;
        return view('Pages.Postingan-desc')->with('product_detail', $product_detail)->with('averageRating', $averageRating);
    }
    public function merchantDetail($slug)
    {
        $merchant_detail = Merchant::getMerchantBySlug($slug);
        if (!$merchant_detail) {
            abort(404, 'merchant not found');
        }
        
        $products_paginate = Product::where('merchant_id', $merchant_detail->id)->paginate(5);
        return view('Pages.Merchant-desc')->with('merchant_detail', $merchant_detail)->with('products_paginate', $products_paginate);
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

    public function merchantGrids(Request $request)
    {
        $merchants = Merchant::query();



        // Search logic
        if ($request->filled('search')) {
            $search = $request->input('search');
            $merchants->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner', 'LIKE', '%' . $search . '%')
                    ->orWhere('address', 'LIKE', '%' . $search . '%');
            });
        }


        // Sorting logic
        if ($request->filled('sort')) {
            $sort = $request->input('sort');
            if ($sort == 'terbaru') {
                $merchants->orderBy('id', 'desc');
            } elseif ($sort == 'terlama') {
                $merchants->orderBy('id', 'asc');
            }
        }

        // Pagination
        $show = $request->input('show', 10);
        $merchants = $merchants->paginate($show);

        return view('Pages.Merchant')->with('merchants', $merchants);
    }
}
