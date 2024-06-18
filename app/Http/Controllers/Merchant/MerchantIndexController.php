<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Product;
use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',

        ]);

        $merchant = Auth::guard('merchant')->user();

        if (!Hash::check($request->old_password, $merchant->password)) {
            Alert::error('Password lama salah');
            return back()->withErrors(['old_password' => 'Password lama salah']);
        }

        $merchant->password = Hash::make($request->new_password);
        $merchant->save();
        Alert::success('Password berhasil diubah');
        return back()->with('status', 'Password berhasil diubah');
    }
}
