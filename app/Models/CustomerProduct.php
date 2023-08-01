<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerProduct extends Model
{
    use HasFactory;
    protected $table = 'customer_products';

    protected $fillable = [
        'name',
        'status',
        'published',
        'added_by',
        'subcategory_id',
        'subsubcategory_id',
        'photos',
        'thumbnail_img',
        'conditon',
        'location',
        'video_provider',
        'video_link',
        'unit',
        'tags',
        'description',
        'unit_price',
        'meta_title',
        'meta_description',
        'meta_img',
        'pdf',
        'slug',
        'brand_id',
        'category_id',
        'user_id',
    ];

    /**
     * Get the brand associated with the customer product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the category associated with the customer product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user associated with the customer product.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
