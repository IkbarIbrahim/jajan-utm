<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Product;
use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerchantIndexController extends Controller
{
    public function index()
    {
        return view('Merchant.Index');
    }
    public function merchantDetail($slug)
    {
        $merchant_detail = Merchant::getMerchantBySlug($slug);
        if (!$merchant_detail) {
            abort(404, 'merchant not found');
        }
        
        $products_paginate = Product::where('merchant_id', $merchant_detail->id)->paginate(5);
        return view('Merchant.Pages.Preview-toko')->with('merchant_detail', $merchant_detail)->with('products_paginate', $products_paginate);
    }
}
