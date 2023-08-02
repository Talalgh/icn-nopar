<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translations';

    // Define the polymorphic relationship
    public function translatable()
    {
        return $this->morphTo();
    }
}
