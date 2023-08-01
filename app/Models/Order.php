<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'combined_order_id',
        'user_id',
        'guest_id',
        'seller_id',
        'shipping_address',
        'additional_info',
        'shipping_type',
        'pickup_point_id',
        'delivery_status',
        'payment_type',
        'manual_payment',
        'manual_payment_data',
        'payment_status',
        'payment_details',
        'grand_total',
        'coupon_discount',
        'code',
        'tracking_code',
        'date',
        'viewed',
        'delivery_viewed',
        'payment_status_viewed',
        'commission_calculated',
        'show_status',
    ];
    

}
