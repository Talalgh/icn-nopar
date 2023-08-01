<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_packagePayments extends Model
{
    protected $table = 'seller_package_payments';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sellerPackage()
    {
        return $this->belongsTo(SellerPackage::class, 'seller_package_id');
    }

}
