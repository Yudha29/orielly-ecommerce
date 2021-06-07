<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * View admin's all products page.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function adminIndex(Request $request) {
        $products = Product::orderBy('created_at', 'DESC')->get();

        return view('admin.product.products', compact('products'));
    }

    /**
     * View client's product detail page.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function clientView(Request $request, $id) {
        // Get all recommended categories.
        $recommendedCategories = Category::all()->slice(0, 5);

        // Get single product detail.
        $product = Product::find($id);

        // Get all products
        $products = Product::all();

        // Get all products that has special offer
        $hasSpecialOfferProducts = $products->filter(function ($p) {
            return isset($p->discount) && $p->discount > 0;
        })->shuffle()->slice(0, 6);

        // Get all recommended products
        $recommendedProducts = $products->shuffle()->slice(0, 6);

        return view('client.product-detail', compact(
            'product',
            'hasSpecialOfferProducts',
            'recommendedProducts',
            'recommendedCategories',
        ));
    }

    /**
     * Controller method to view product add form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create() {
        $categories = Category::all();

        return view('admin.product.product-create', compact('categories'));
    }

    /**
     * Store new product.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        // Create image filename
        $filename = time().'.'.$request->thumbnail->extension();

        // Upload image
        $request->thumbnail->move(public_path('assets/products'), $filename);

        // Product data that will saved to database with its relations
        $productData = [
            'name' => $request->name,
            'merk' => $request->merk,
            'price' => $request->price,
            'discount' => $request->discount,
            'num_of_sold' => 0,
            'description' => $request->description,
        ];

        $photo = ['name' => $filename];

        // Create and save the product
        $product = new Product($productData);
        $product->save();
        // Save the product's related categories and photo
        $product->photos()->create($photo);
        $product->categories()->attach([$request->category], ["id" => Str::uuid()->toString()]);

        return redirect('/backend/products');
    }

    public function destroy(Request $request, $id) {
        $product = Product::find($id);

        $product->delete();

        return redirect('/backend/products');
    }
}
