<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeProduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'shop',
        'product'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product');
    }

    public function store()
    {
        return $this->belongsTo(Store::class,'shop');
    }
}
