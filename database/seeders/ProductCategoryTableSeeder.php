<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->delete();
        $data = File::get('database/data/product_category.json');
        $productsCategories = json_decode($data);
        foreach ($productsCategories as $e) {
            ProductCategory::create([
                'id' => $e->id,
                'product_id' => $e->product_id,
                'category_id' => $e->category_id
            ]);
        }
    }
}
