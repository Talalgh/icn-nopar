<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaykuPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'start',
        'end',
        'media',
        'transaction_key',
        'payment_key',
        'verification_key',
        'authorization_code',
        'last_4_digits',
        'installments',
        'card_type',
        'additional_parameters',
        'currency',
    ];


}
