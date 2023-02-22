<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stores;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{

    public function show(Request $request){
        $id = 1;
        if(isset($request->sort)){
            if($request->sort == "name"){
                $product = DB::table('products')
            ->join('store_products', 'products.id', '=', 'store_products.product')
            ->select('products.*', 'store_products.shop')
            ->join('stores', 'store_products.shop', '=', 'stores.id')
            ->where('store_products.shop', '=', 1)
            ->orderBy('products.name')
            ->get();
            
            } elseif($request->sort == "price"){
                $product = DB::table('products')
            ->join('store_products', 'products.id', '=', 'store_products.product')
            ->select('products.*', 'store_products.shop')
            ->join('stores', 'store_products.shop', '=', 'stores.id')
            ->where('store_products.shop', '=', 1)
            ->orderBy('products.price')
            ->get();
            }
        } else{
            $store = stores::find(1);
            $product = $store->products;
        }
        return view('content',compact('product','id'));
    }

    public function index(Request $request){
        $id = $request->id;
        if(isset($request->sort)){
            if($request->sort == "name"){
                $product = DB::table('products')
            ->join('store_products', 'products.id', '=', 'store_products.product')
            ->select('products.*', 'store_products.shop')
            ->join('stores', 'store_products.shop', '=', 'stores.id')
            ->where('store_products.shop', '=', $id)
            ->orderBy('products.name')
            ->get();
            
            } elseif($request->sort == "price"){
                $product = DB::table('products')
            ->join('store_products', 'products.id', '=', 'store_products.product')
            ->select('products.*', 'store_products.shop')
            ->join('stores', 'store_products.shop', '=', 'stores.id')
            ->where('store_products.shop', '=', $id)
            ->orderBy('products.price')
            ->get();
            }
        } else{
            $store = stores::find($id);
            $product = $store->products;
        }
        return view('content',compact('product','id'));
    }
}
