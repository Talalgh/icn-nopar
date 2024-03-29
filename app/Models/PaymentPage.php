<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPage extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_level',
        'position',
    ];

    // relation with PaymentPageTranslation table
    public function paymentPageTranslations()
    {
        return $this->hasMany(PaymentPageTranslation::class);
    }

}
