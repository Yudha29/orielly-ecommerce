<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BagController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $hasSpecialOfferProducts = $products->filter(function ($p) {
            return isset($p->discount) && $p->discount > 0;
        })->shuffle()->slice(0, 6);
        $mostPopularProducts = $products->filter(function ($p) {
            return $p->num_of_sold > 1000;
        })->shuffle()->slice(0, 12);

        return view('client.bag', compact('hasSpecialOfferProducts', 'mostPopularProducts'));
    }
}
