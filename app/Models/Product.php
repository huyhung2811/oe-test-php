<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'toppings'
    ];

    public function shops()
    {
        return $this->belongsToMany(Shop::class, 'store_products','product','shop');
    }

}
