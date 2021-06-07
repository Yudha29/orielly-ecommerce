<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function adminIndex(Request $request) {
        $products = Product::orderBy('created_at', 'DESC')->get();

        return view('admin.product.products', compact('products'));
    }

    public function clientView(Request $request, $id) {
        $recommendedCategories = Category::all()->slice(0, 5);
        $product = Product::find($id);
        $products = Product::all();
        $hasSpecialOfferProducts = $products->filter(function ($p) {
            return isset($p->discount) && $p->discount > 0;
        })->shuffle()->slice(0, 6);
        $recommendedProducts = $products->shuffle()->slice(0, 6);

        return view('client.product-detail', compact(
            'product',
            'hasSpecialOfferProducts',
            'recommendedProducts',
            'recommendedCategories',
        ));
    }
}
