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



    // one combined_orders to many orders
    public function CombinedOrder()
    {
        return $this->belongsTo(CombinedOrders::class, "combined_order_id");
    }

    // one user to many orders
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    // one seller to many orders
    public function Seller()
    {
        return $this->belongsTo(Seller::class);
    }

    // one order to one pick_point     // Relation with PickupPoint table
    public function PickupPoint()
    {
        return $this->belongsTo(PickupPoints::class);
    }

    // relation with order_details table
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // relation with payku_Transaction table
    public function paykuTransaction()
    {
        return $this->hasOne(PaykuTransaction::class);
    }

    // relation with ProxyPay table
    public function proxypay()
    {
        return $this->belongsTo(ProxyPay::class);
    }


    // relation with refundRequests table
    public function refundRequests()
    {
        return $this->hasMany(RefundRequest::class);
    }


}
