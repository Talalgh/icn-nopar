<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'variation',
        'price',
        'tax',
        'shipping_cost',
        'shipping_type',
        'pickup_point',
        'discount',
        'product_referral_code',
        'coupon_code',
        'coupon_applied',
        'quantity',
        'owner_id',
        'temp_user_id',
        'user_id',
        'address_id',
        'product_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
