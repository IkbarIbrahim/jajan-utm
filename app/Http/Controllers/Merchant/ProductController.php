<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function edit(Product $product)
    {
        return view('Merchant.Products.Edit', [
            'product' => Product::findOrFail($product->id),
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'category' => [
                'required',
                Rule::in(['makanan', 'minuman']),
            ],
            'price' => ['required', 'numeric'],
            'rating' => ['required', 'numeric', 'min:0', 'max:5'],
            'status' => [
                'required',
                Rule::in(['tersedia', 'habis']),
            ],
            'photo' => ['required', 'file', 'mimes:jpg,png', 'max:2048'],
        ]);

        // upload photo here
        // ...
        unset($validated['photo']);
        // ...

        $product->update($validated);

        return redirect()->route('merchant.products.edit', ['product' => $product->id])->with(
            'success',
            'Produk berhasil diperbarui.'
        );
    }

    public function destroy(Product $product)
    {
        $product->favorites()->delete();
        $product->comments()->delete();
        $product->delete();

        return redirect()->route('merchant.index');
    }
}
