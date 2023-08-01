<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'guest_id',
        'amount',
        'status',
        'affiliate_type',
        'referred_by_user',
        'user_id',
        'order_id',
        'order_detail_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
