<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'color_code',
        'attribute_id',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
}
