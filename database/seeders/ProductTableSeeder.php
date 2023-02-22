<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(storage_path('app/data/products.json'));
        $data = json_decode($json,true);
        
        foreach($data['products'] as $product){
            Product::query()->updateOrCreate([
                'id'=>$product['id'],
                'name'=>$product['name'],
                'price'=>$product['price'],
                'toppings'=>$product['toppings'],
            ]);
        }
    }
}
