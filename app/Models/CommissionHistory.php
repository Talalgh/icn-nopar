<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionHistory extends Model
{
    use HasFactory;
    protected $table = 'commission_histories';

    protected $fillable = [
        'admin_commission',
        'seller_earning',
        'order_detail_id',
        'order_id',
        'seller_id',
    ];

    /**
     * Get the order detail that corresponds to the commission history.
     */
    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }

    /**
     * Get the order that corresponds to the commission history.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the seller that corresponds to the commission history.
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
