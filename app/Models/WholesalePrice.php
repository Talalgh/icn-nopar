<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wholesale_prices extends Model
{
    protected $table ='wholesale_prices';

    public function productStock()
    {
        return $this->belongsTo(ProductStock::class, 'product_stock_id');
    }
}
