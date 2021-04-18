<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $data = File::get('database/data/categories.json');
        $categories = json_decode($data);
        foreach ($categories as $c) {
            Category::create([
                'id' => $c->id,
                'name' => $c->name,
                'picture' => $c->picture
            ]);
        }
    }
}
