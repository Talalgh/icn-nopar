<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerProductTranslation extends Model
{
    use HasFactory;
    protected $table = 'customer_product_translations';

    protected $fillable = [
        'name',
        'unit',
        'description',
        'lang',
        'customer_product_id',
    ];

    /**
     * Get the customer product associated with the translation.
     */
    public function customerProduct()
    {
        return $this->belongsTo(CustomerProduct::class);
    }
}
