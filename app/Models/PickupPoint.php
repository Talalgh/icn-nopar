<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'name',
        'address',
        'phone',
        'pick_up_status',
        'cash_on_pickup_status',
    ];

}
