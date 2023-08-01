<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'searches';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
