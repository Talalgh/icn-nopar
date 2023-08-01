<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaykuTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'status',
        'order',
        'email',
        'subject',
        'url',
        'amount',
        'notified_at',
    ];

}
