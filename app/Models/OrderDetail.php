<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'seller_id',
        'product_id',
        'variation',
        'price',
        'tax',
        'shipping_cost',
        'quantity',
        'payment_status',
        'delivery_status',
        'shipping_type',
        'pickup_point_id',
        'product_referral_code',
    ];

    // one order_detail to one order
    public function orders() {
        return $this->belongsTo(Order::class);
    }

    // one seller many order_detail
    public function sellers(){
        return $this->hasMany(Seller::class);
    }

    // one product to one order_detail         // Relation with Products table
    public function products() {
        return $this->belongsTo(Product::class);
    }

    // one pickup_point one order_detail      // Relation with PickupPoint table
    public function pickupPoints() {
        return $this->belongsTo(PickupPoint::class);
    }


    // Relation with refundRequests table
    public function refundRequests()
    {
        return $this->hasMany(RefundRequest::class);
    }


}
