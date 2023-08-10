<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/products.json');
        $products = collect(json_decode($json));

        $products->each(function($product){
            DB::table('products')->insert([
                'name' => $product->name,
                'price' => $product->price,
                'category' => $product -> category,
                'description' => $product-> description,
                'gallery' => $product -> gallery
            ]);

        });
    }
}
