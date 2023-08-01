<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProxypayPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_type',
        'reference_id',
        'order_id',
        'package_id',
        'user_id',
        'amount',
    ];

    // one proxypay to many order
    public function orders() {
        return $this->belongsTo(Order::class);
    }


    // one proxypay many package
    public function packages(){
        return $this->belongsToMany(Package::class);
    }

    // one user many proxypay
    public function users() {
        return $this->belongsTo(User::class);
    }

}
