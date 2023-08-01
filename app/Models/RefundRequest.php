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

}
