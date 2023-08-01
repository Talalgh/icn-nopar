<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliatePayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'payment_method',
        'payment_details',
        'affiliate_user_id',
    ];

    // Define the relationship with the AffiliateUser model
    public function affiliateUser()
    {
        return $this->belongsTo(AffiliateUser::class, 'affiliate_user_id');
    }
}
