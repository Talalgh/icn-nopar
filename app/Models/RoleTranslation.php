<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_translations extends Model
{
    protected $table = 'role_translations';

    public function role()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }

}
