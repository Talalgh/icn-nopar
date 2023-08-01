<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner',
        'banner_responsive',
        'name',
        'content',
        'link',
        'lang',
        'banner_id',
    ];

    public function banner()
    {
        return $this->belongsTo(Banner::class, 'banner_id');
    }
}
