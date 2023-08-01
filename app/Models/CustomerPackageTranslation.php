<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPackageTranslation extends Model
{
    use HasFactory;
    protected $table = 'customer_package_translations';

    protected $fillable = [
        'name',
        'lang',
        'customer_package_id',
    ];

    /**
     * Get the customer package associated with the translation.
     */
    public function customerPackage()
    {
        return $this->belongsTo(CustomerPackage::class);
    }
}
