<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\stores;
class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(storage_path('app/data/stores.json'));
        $data2 = json_decode($json,true);
        
        foreach($data2['stores'] as $shopproduct){
            stores::query()->updateOrCreate([
                'id'=>$shopproduct['id'],
                'name'=>$shopproduct['name'],
            ]);
        }
    }
}
