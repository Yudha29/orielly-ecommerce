<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $categories = Category::all();
        $recommendedCategories = $categories->slice(0, 5);

        $products = Product::all();
        $hasSpecialOfferProducts = $products->filter(function ($p) {
            return isset($p->discount) && $p->discount > 0;
        })->shuffle()->slice(0, 6);
        $mostPopularProducts = $products->filter(function ($p) {
           return $p->num_of_sold > 1000;
        })->shuffle()->slice(0, 12);
        $recommendedProducts = $products->shuffle()->slice(0, 12);

        return view('client.home', compact(
            'categories',
            'recommendedCategories',
            'hasSpecialOfferProducts',
            'mostPopularProducts',
            'recommendedProducts'
        ));
    }

    public function contactUs() {
        $recommendedCategories = Category::all()->slice(0, 5);

        return view('client.contact-us', compact(
            'recommendedCategories'
        ));
    }

    public function aboutUs() {
        $recommendedCategories = Category::all()->slice(0, 5);

        return view('client.about-us', compact(
            'recommendedCategories'
        ));
    }
}
