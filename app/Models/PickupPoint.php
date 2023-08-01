<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'name',
        'address',
        'phone',
        'pick_up_status',
        'cash_on_pickup_status',
    ];


    // one pickup_point many staff
    public function staff() {
        return $this->belongsTo(Staff::class);
    }


    // relation with orders table
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // relation with product_details table
    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }

    // Relation with PickupPointTranslation table
    public function pickupPointTranslations()
    {
        return $this->hasMany(PickupPointTranslation::class);
    }


}
