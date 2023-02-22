<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stores;

class StoreController extends Controller
{

    public function show(Request $request){
        $id = 1;
        $store = stores::find(1);
        $product = $store->products;
        // dd($product);
        return view('content',compact('product','id'));
    }
    public function index(Request $request){
        $id = $request->id;
        $store = stores::find($id);
        $product = $store->products;
        // dd($product);
        return view('content',compact('product','id'));
        // $product = $storeProducts->product;
        // dd($product);
        // $json = file_get_contents(storage_path('app/data/stores.json'));
        // $data2 = json_decode($json,true);
        // echo "<pre>";
        
        // echo "</pre>";
    }
}
