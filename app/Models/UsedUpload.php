<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Used_uploads extends Model
{
    protected $table = 'used_uploads';

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'id_uploads');
    }
}
