<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function clientView(Request $request, $id) {
        $recommendedCategories = Category::all()->slice(0, 5);
        $product = Product::find($id);
        $products = Product::all()->shuffle();
        $hasSpecialOfferProducts = $products->filter(function ($p) {
            return isset($p->discount) && $p->discount > 0;
        })->slice(0, 6);
        $recommendedProducts = $products->slice(0, 12);

        return view('client.product-detail', compact(
            'product',
            'recommendedCategories',
            'recommendedProducts'
        ));
    }
}
