<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPackagePayment extends Model
{
    use HasFactory;
    protected $table = 'customer_package_payments';

    protected $fillable = [
        'payment_method',
        'payment_details',
        'approval',
        'offline_payment',
        'reciept',
        'customer_package_id',
        'user_id',
    ];

    /**
     * Get the customer package associated with the payment.
     */
    public function customerPackage()
    {
        return $this->belongsTo(CustomerPackage::class);
    }

    /**
     * Get the user associated with the payment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
