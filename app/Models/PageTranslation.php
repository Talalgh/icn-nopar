<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'banner',
        'title',
        'content',
        'lang',
    ];

    // one page many page_translations
    public function pages() {
        return $this->belongsTo(Page::class);
    }


}
