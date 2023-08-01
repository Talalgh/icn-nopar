<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'variant',
        'sku',
        'price',
        'qty',
        'stuck_qty',
        'image',
    ];


    // one product many product_stock
    public function products() {
        return $this->belongsTo(Product::class);
    }

}
