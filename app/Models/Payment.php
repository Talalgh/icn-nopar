<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'amount',
        'payment_details',
        'payment_method',
        'txn_code',
    ];


    // one seller many payments
    public function seller() {
        return $this->belongsTo(Seller::class);
    }

}
