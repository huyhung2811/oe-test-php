<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\storeProduct;
class storeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(storage_path('app/data/storeProducts.json'));
        $data1 = json_decode($json,true);
        
        foreach($data1['shopProducts'] as $shopproduct){
            storeProduct::query()->updateOrCreate([
                'id'=>$shopproduct['id'],
                'shop'=>$shopproduct['shop'],
                'product'=>$shopproduct['product'],
            ]);
        }
    }
}
