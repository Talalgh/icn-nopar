<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = 'texes';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tax', 'tax_id', 'product_id');
    }
}
