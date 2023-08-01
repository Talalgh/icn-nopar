<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CombinedOrder extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table = 'combined_orders';

    protected $fillable = [
        'shipping_address',
        'grand_total',
        'code',
        'password',
        'shipping_type',
        'date',
        'delivery_status',
        'payment_status',
        'payment_type',
        'cash_on_delivery_code',
        'show_status',
        'webhook',
        'user_id',
    ];

    /**
     * Get the user that placed the combined order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
