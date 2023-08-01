<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparison extends Model
{
    use HasFactory;
    protected $table = 'comparisons';

    protected $fillable = [
        'temp_user_id',
        'product_id',
        'user_id',
    ];

    /**
     * Get the product associated with the comparison.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the user associated with the comparison.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
