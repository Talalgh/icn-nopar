<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'comment',
        'status',
        'viewed',
    ];

    // one product many reviews
    public function product() {
        return $this->belongsTo(Product::class);
    }

    // one user many reviews
    public function user() {
        return $this->belongsTo(User::class);
    }


}
