<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashDeal extends Model
{
    use HasFactory;
    protected $table = 'flash_deals';

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'status',
        'featured',
        'background_color',
        'banner',
        'text_color',
        'slug',
        'position',
    ];
}
