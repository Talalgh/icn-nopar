<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lang',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
