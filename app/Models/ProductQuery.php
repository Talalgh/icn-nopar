<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuery extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'seller_id',
        'product_id',
        'question',
        'reply',
    ];

    // many product_query one user
    public function customer() {
        return $this->belongsTo(User::class);
    }

    // one seller many product_query
    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    // one product many product_query
    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
