<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_star',
        'level',
        'name',
        'parent_id',
        'order_level',
        'commision_rate',
        'banner',
        'icon',
        'featured',
        'top',
        'digital',
        'slug',
        'meta_title',
        'meta_description',
        'published',
        'bg_icon',
        'bg_slider',
        'color_banner',
        'show_home',
        'order_home',
        'order_category',
        'show_category',
        'show_subcategory',
        'order_subcategory',
        'show_shop',
        'order_shop',
        'shop_used',
    ];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
