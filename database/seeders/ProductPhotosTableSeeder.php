<?php

namespace Database\Seeders;

use App\Models\ProductPhoto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_photos')->delete();
        $data = File::get('database/data/product_photos.json');
        $productPhotos = json_decode($data);
        foreach ($productPhotos as $e) {
            ProductPhoto::create([
                'id' => $e->id,
                'product_id' => $e->product_id,
                'name' => $e->name
            ]);
        }
    }
}
