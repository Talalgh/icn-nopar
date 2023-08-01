<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProxypayPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_type',
        'reference_id',
        'order_id',
        'package_id',
        'user_id',
        'amount',
    ];

}
