<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State_translations extends Model
{
    protected $table = 'State_translations';

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
