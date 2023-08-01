<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'tax_id',
        'tax',
        'tax_type',
    ];


    // one product one product_tax
    public function products() {
        return $this->belongsTo(Product::class);
    }

    // many product_tax to one tax
    public function taxes(){
        return $this->hasOne(Tax::class);
    }

}
