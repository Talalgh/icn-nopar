<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPageTranslation extends Model
{
    use HasFactory;


    protected $fillable = [
        'payment_page_id',
        'image',
        'image_responsive',
        'title',
        'content',
        'link',
        'lang',
    ];

    // one payment_page to many payment_page_translation
    public function payment_page() {
        return $this->belongsTo(PaymentPage::class);
    }

}
