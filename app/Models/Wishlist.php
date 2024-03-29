<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table ='wishlists';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the relationship with Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
