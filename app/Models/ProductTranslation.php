<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'brand_text',
        'unit',
        'description',
        'return_policy',
        'warranty_policy',
        'features',
        'tags',
        'meta_title',
        'meta_description',
        'meta_img',
        'lang',
    ];

}
