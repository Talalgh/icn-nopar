<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_packages extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_seller_package', 'seller_package_id', 'user_id');
    }

    public function sellers()
    {
        return $this->hasMany(Seller::class, 'seller_package_id');
    }

    public function sellerPackagePayments()
    {
        return $this->hasMany(SellerPackagePayment::class, 'seller_package_id');
    }

    public function translations()
    {
        return $this->hasMany(SellerPackageTranslation::class, 'seller_package_id');
    }

}
