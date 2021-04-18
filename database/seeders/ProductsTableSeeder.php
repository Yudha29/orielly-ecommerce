<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $data = File::get('database/data/products.json');
        $products = json_decode($data);
        foreach ($products as $e) {
            Product::create([
                'id' => $e->id,
                'discount' => $e->discount,
                'name' => $e->name,
                'description' => $e->description,
                'merk' => $e->merk,
                'price' => $e->price,
                'num_of_sold' => $e->numOfSold
            ]);
        }
    }
}
