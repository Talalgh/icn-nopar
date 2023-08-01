<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';

    protected $fillable = [
        'type',
        'code',
        'details',
        'discount',
        'discount_type',
        'start_date',
        'end_date',
        'user_id',
    ];

    /**
     * Get the user associated with the coupon.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
