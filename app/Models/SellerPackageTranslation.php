<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_packageTranslations extends Model
{
    protected $table = 'seller_package_translations';

    public function sellerPackage()
    {
        return $this->belongsTo(SellerPackage::class, 'seller_package_id');
    }
}
