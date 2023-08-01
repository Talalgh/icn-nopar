<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'order_detail_id',
        'seller_id',
        'seller_approval',
        'admin_approval',
        'refund_amount',
        'reason',
        'admin_seen',
        'refund_status',
        'reject_reason',
    ];


    // one user many refundrequest
    public function users() {
        return $this->belongsTo(User::class);
    }


    // one order many refund_request
    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    // one order_detail many refund_request
    public function orderDetails() {
        return $this->belongsToMany(OrderDetail::class);
    }

    // one seller many refund_request
    public function sellers() {
        return $this->belongsTo(Seller::class);
    }

}
