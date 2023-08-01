<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPointTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_point_id',
        'name',
        'address',
        'lang',
    ];

}
