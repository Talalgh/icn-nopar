<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateState extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_of_click',
        'no_of_order_item',
        'no_of_delivered',
        'no_of_cancel',
        'affiliate_user_id',
    ];

    public function affiliateUser()
    {
        return $this->belongsTo(AffiliateUser::class, 'affiliate_user_id', 'user_id');
    }
}
