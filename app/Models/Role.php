<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }

    public function translations()
    {
        return $this->hasMany(Role_translations::class, 'role_id');
    }

    public function staff()
    {
        return $this->hasMany(Staff::class, 'role_id');
    }
}
