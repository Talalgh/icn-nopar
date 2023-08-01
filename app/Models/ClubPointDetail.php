<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubPointDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_qty',
        'point',
        'club_point_id',
        'product_id',
    ];

    public function clubPoint()
    {
        return $this->belongsTo(ClubPoint::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
