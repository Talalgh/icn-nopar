<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponUsage extends Model
{
    use HasFactory;
    protected $table = 'coupon_usages';

    protected $fillable = [
        'coupon_id',
        'user_id',
    ];

    /**
     * Get the coupon associated with the usage.
     */
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    /**
     * Get the user associated with the usage.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
