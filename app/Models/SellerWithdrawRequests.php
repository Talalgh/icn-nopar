<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_withdrawRequests extends Model
{
    protected $table = 'seller_withdraw_requests';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
