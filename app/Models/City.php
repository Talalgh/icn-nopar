<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class City extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'cost',
        'status',
        'state_id',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function Address()
    {
        return $this->belongsTo(Address::class);
    }
}
