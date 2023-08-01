<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'added_by',
        'user_id',
        'category_id',
        'brand_id',
        'photos',
        'thumbnail_img',
        'video_provider',
        'video_link',
        'tags',
        'description',
        'unit_price',
        'purchase_price',
        'variant_product',
        'attributes',
        'features',
        'choice_options',
        'colors',
        'variations',
        'todays_deal',
        'published',
        'approved',
        'stock_visibility_state',
        'cash_on_delivery',
        'featured',
        'seller_featured',
        'current_stock',
        'unit',
        'min_qty',
        'low_stock_quantity',
        'discount',
        'discount_type',
        'discount_start_date',
        'discount_end_date',
        'tax',
        'tax_type',
        'shipping_type',
        'shipping_cost',
        'is_quantity_multiplied',
        'est_shipping_days',
        'num_of_sale',
        'meta_title',
        'meta_description',
        'meta_img',
        'pdf',
        'slug',
        'refundable',
        'earn_point',
        'rating',
        'barcode',
        'digital',
        'auction_product',
        'file_name',
        'file_path',
        'external_link',
        'external_link_btn',
        'wholesale_product',
        'new_product',
        'best_product',
        'show_home',
        'order_home',
        'fixed_home',
        'fixed_sub_home',
        'order_sub_home',
        'show_parent_categories_home',
        'show_sub_categories_home',
        'show_category',
        'order_category',
        'fixed_category',
        'show_sub_category',
        'order_sub_category',
        'fixed_sub_category',
        'show_subcategory',
        'order_subcategory',
        'fixed_subcategory',
        'show_sub_subcategory',
        'order_sub_subcategory',
        'fixed_sub_subcategory',
        'show_filter_first',
        'order_filter',
        'show_shop',
        'order_shop',
    ];


    // one user to many products
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // one category many products
    public function categories()
    {
        return $this->belongsTo(category::class);
    }

    // one brand many products
    public function brands()
    {
        return $this->belongsTo(brand::class);
    }

    // relation with order_details table
    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }


    // Relation with ProductQuery table
    public function productQueries()
    {
        return $this->hasMany(ProductQuery::class);
    }

    // Relation with Product table
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    // Relation with ProductTax table
    public function productTax()
    {
        return $this->hasOne(ProductTax::class);
    }

    // Relation with ProductTranslation table
    public function productTranslations()
    {
        return $this->hasMany(ProductTranslation::class);
    }

    // Relation with reviews table
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
