<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashDealProduct extends Model
{
    use HasFactory;
    protected $table = 'flash_deal_products';

    protected $fillable = [
        'discount',
        'discount_type',
        'order',
        'product_id',
        'flash_deal_id',
    ];

    /**
     * Get the product associated with the flash deal product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the flash deal associated with the flash deal product.
     */
    public function flashDeal()
    {
        return $this->belongsTo(FlashDeal::class);
    }
}
