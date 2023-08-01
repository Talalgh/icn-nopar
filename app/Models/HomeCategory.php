<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCategory extends Model
{
    use HasFactory;
    protected $table = 'home_categories';

    protected $fillable = [
        'subsubcategories',
        'status',
        'category_id',
    ];

    /**
     * Get the category associated with the home category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
