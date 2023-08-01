<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'uploads';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the Polymorphic relationship for attachments
    public function attachable()
    {
        return $this->morphTo();
    }

    public function used_uploads()
    {
        return $this->hasMany(UsedUpload::class, 'id_uploads');
    }
}
