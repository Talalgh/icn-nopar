<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPackage extends Model
{
    use HasFactory;
    protected $table = 'customer_packages';

    protected $fillable = [
        'name',
        'amount',
        'product_upload',
        'logo',
    ];
}
