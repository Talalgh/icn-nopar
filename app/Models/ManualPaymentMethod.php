<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualPaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'manual_payment_methods';

    protected $fillable = [
        'type',
        'heading',
        'description',
        'bank_info',
        'photo',
    ];
}
